<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('racks')->insert([
            [
                'rack_name'=>"Rack 01",
            ],
            [
                'rack_name'=>"Rack 02",
            ],
            [
                'rack_name'=>"Rack 03",
            ],
            [
                'rack_name'=>"Rack 04",
            ],
            [
                'rack_name'=>"Rack 05",
            ],
            
        ]);
    }
}
