<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert(
            [
                [
                    'name'=>"Toan"
                ],
                [
                    'name'=>"Huy"
                ],
                [
                    'name'=>"Son"
                ],
                [
                    'name'=>"Tuyen"
                ],
                [
                    'name'=>"Hung"
                ],
                [
                    'name'=>"Van"
                ],
                [
                    'name'=>"Nam"
                ],
                [
                    'name'=>"Thai"
                ],

            ]
        );
    }
}
