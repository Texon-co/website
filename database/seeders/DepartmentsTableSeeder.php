<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(
            [
                ['name' => 'Business Development'],
                ['name' => 'Buying & Category Management'],
                ['name' => 'Customer Care'],
                ['name' => 'Finance & Legal'],
                ['name' => 'HR & Organization'],
                ['name' => 'Logistics & Supply Chain'],
                ['name' => 'Marketing'],
                ['name' => 'On-Site Production'],
                ['name' => 'Partnership & Sales'],
                ['name' => 'Style & Creative'],
                ['name' => 'Technology'],
                ['name' => 'Various'],
                ['name' => 'Westwing Delivery Service'],
            ]
        );
    }
}
