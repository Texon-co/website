<?php

namespace App\Mail\Application;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Rejected extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The application instance.
     *
     * @var \App\Models\Application
     */
    public $application;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('texoncareers_noreply@texon-co.com', 'Texon Careers')
                    ->subject('Your application to Texon')
                    ->view('email.application.rejected');
    }
}
