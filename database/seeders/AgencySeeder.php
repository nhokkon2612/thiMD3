<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('agencies')->insert(
            [
                [
                    'name_agency'=>'Hoang Nguyen',
                    'phone'=>'012552525',
                    'email'=>'hoanghocdot@gmail.com',
                    'address'=>'235 Le dai hanh Ha noi',
                    'manager_id'=>1,
                    'status_id'=>1
                ],
                [
                    'name_agency'=>'Van Thin',
                    'phone'=>'012552525',
                    'email'=>'thinvanngu@gmail.com',
                    'address'=>'81 TranHungDao Ha noi',
                    'manager_id'=>1,
                    'status_id'=>1
                ],
                [
                    'name_agency'=>'Nguyen Ha',
                    'phone'=>'012552525',
                    'email'=>'hanguyenhihi@gmail.com',
                    'address'=>'235 Lena Ha noi',
                    'manager_id'=>1,
                    'status_id'=>1
                ],
                [
                    'name_agency'=>'Thang Nguyen',
                    'phone'=>'012552525',
                    'email'=>'thanghoang@gmail.com',
                    'address'=>'235 Sao ay nho Ha noi',
                    'manager_id'=>1,
                    'status_id'=>1
                ],
            ]
        );
    }
}
