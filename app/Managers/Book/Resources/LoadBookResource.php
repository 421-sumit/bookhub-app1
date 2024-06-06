<?php
namespace App\Managers\Book\Resources;
use App\Models\Book;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Rack;
use App\Models\Genre;

class LoadBookResource{
    public function load(){
        $books = Book::get();
        $languages = Language::get();
        $genres = Genre::get();
        $publishers = Publisher::get();
        $racks = Rack::get();
        $authors = Author::get();
        return view('book.createbook', [
            'books' => $books,
            'languages' => $languages,
            'genres' => $genres,
            'publishers' => $publishers,
            'racks' => $racks,
            'authors' => $authors,
        ]);
    }
}