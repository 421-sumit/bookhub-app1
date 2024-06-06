<?php
namespace App\Managers\Book\Resources;

use App\Models\Book;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Rack;
use App\Models\Genre;

class EditBookResource{
    public function load(Book $book){
        $languages = Language::get();
        $genres = Genre::get();
        $publishers = Publisher::get();
        $racks = Rack::get();
        $authors = Author::get();
        return view('book.updatebook', [
            'book' => $book,
            'languages' => $languages,
            'genres' => $genres,
            'publishers' => $publishers,
            'racks' => $racks,
            'authors' => $authors,
        ]);
    }
}