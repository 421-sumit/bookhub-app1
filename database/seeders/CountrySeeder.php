<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'country_name'=>"India",
            ],
            [
                'country_name'=>"Shrilanka",
            ],
            [
                'country_name'=>"Japan",
            ],
        ]);
    }
}
