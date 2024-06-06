<?php
namespace App\Managers\Book\Resources;
use App\Models\Book;

class DeleteBookResource{
    public function perform(Book $book){
        $book->delete();
        info("book deleted!!");
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}