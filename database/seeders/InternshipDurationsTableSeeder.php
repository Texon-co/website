<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InternshipDurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('internship_durations')->insert(
            [
                ['title' => '3 months'],
                ['title' => '4 months'],
                ['title' => '5 months'],
                ['title' => '6 months']
            ]
        );
    }
}
