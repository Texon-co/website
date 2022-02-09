<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_roles')->insert(
            [
                ['name' => 'Full-Time'],
                ['name' => 'Intern'],
                ['name' => 'Part-Time'],
                ['name' => 'Working Student']
            ]
        );
    }
}
