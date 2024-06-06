<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {//
        DB::table('genres')->insert([
            [
                'genre'=>"Mystery/Thriller",
            ],
            [
                'genre'=>"Science Fiction",
            ],
            [
                'genre'=>"Fantasy",
            ],
            [
                'genre'=>"Historical Fiction",
            ],
            [
                'genre'=>"Romance",
            ],
            [
                'genre'=> "Adventure",
            ],
            [
                'genre'=> "Biography",
            ],
            [
                'genre'=>"Dystopian",
            ],
            [
                'genre'=>"Self-Help/Motivational",
            ],
            [
                'genre'=>"Humor/Satire",
            ]
        ]);
    }
}
