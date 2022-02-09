<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobFoundWaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_found_ways')->insert(
            [
                ['title' => 'Other'],
                ['title' => 'Website'],
                ['title' => 'Linkedin'],
                ['title' => 'Twitter'],
                ['title' => 'Instagram']
            ]
        );
    }
}
