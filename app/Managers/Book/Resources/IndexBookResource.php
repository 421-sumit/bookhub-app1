<?php
namespace App\Managers\Book\Resources;
use App\Models\Book;

class IndexBookResource{
    public function fetch(){
        $books = Book::all();
        return view('book.indexbook', compact('books'));
    }
}