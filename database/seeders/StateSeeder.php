<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'state_name'=>"Maharashtra",
                'country_id'=>"1",
            ],
            [
                'state_name'=>"Goa",
                'country_id'=>"1",
            ],
            [
                'state_name'=>"Gujarat",
                'country_id'=>"1",
            ],
        ]);
    }
}
