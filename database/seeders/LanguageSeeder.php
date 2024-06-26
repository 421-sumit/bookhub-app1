<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'language'=>"English",
            ],
            [
                'language'=>"Hindi",
            ],
            [
                'language'=>"Marathi",
            ],
            [
                'language'=>"French",
            ],
            [
                'language'=>"Tamil",
            ],
            [
                'language'=> "Telugu",
            ],
        ]);
    }
}
