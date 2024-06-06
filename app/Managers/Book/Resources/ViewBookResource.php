<?php
namespace App\Managers\Book\Resources;
use App\Models\Book;

class ViewBookResource{
    public function fetch(Book $book){
        return view('book.viewbook', [
            'book' => $book,
        ]);
    }
}