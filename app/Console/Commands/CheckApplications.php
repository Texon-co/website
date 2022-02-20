<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Application;
use App\Mail\Application\Rejected;

class CheckApplications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'application:check
                            {application?* : The ID(s) of application(s) to be checked}
                            {--A|all : Check every application on database}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check application(s) status(es) and send the corresponding email if needed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $applicationIds = $this->argument('application');
        $all = $this->option('all');
        $now = now();
        $nowString = $now->toDateString();
        $twoWeeksAgo = $now->subWeeks(2);
        $twoWeeksAgoString = $twoWeeksAgo->toDateString();

        $applications = Application::where('created_at', '<=', $twoWeeksAgo)
                                    ->where('status', 'Pending');

        if ($all) $applications = $applications->get();
        elseif (count($applicationIds) > 0) $applications = $applications->findMany($applicationIds);
        else return $this->error('provide application ids or use all (-A|--a) option');

        $applicationsCount = count($applications);

        if (!$applicationsCount > 0) return $this->info("No application is in pending status prior to $twoWeeksAgoString (two weeks before now [$nowString]).");

        $this->info("Sending Rejection mail for $applicationsCount application(s), prior to $twoWeeksAgoString (two weeks before now [$nowString]).");
        $bar = $this->output->createProgressBar($applicationsCount);
        $bar->start();
        
        foreach ($applications as $application) {
            $this->info("\nSending Rejection mail for application id:$application->id");
            $this->performTask($application);
            $bar->advance();
        }
        
        $bar->finish();
        $this->info("\nDone!");
    }

    private function performTask($application) {
        $application->update([
            'status' => 'Rejected'
        ]);
        Mail::to($application->email)->queue(new Rejected($application));
    }
}
