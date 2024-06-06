<?php

namespace App\Managers\Book\Resources;

use Illuminate\Http\Request;
use App\Managers\Book\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class UpdateBookResource
{
    private $request;
    private $book;

    public function __construct(Book $book, UpdateBookRequest $request){
        $this->book=$book;
        $this->request=$request;
    }

    public function perform(){

        $this->request->validated();
        try{
            $book = $this->book->update($this->saveAttributes());
            info("book updatetd!!",[$book]);
            return redirect()->route('books.index')->with('success', 'Book updated successfully.');
        } catch (Exception $ex) {
            info("Exception occured!!", $ex->getMessage);
        }
    }

    protected function saveAttributes():array {
        return [
            'title' => $this->request->title,
            'genre_id' => $this->request->genre_id,
            'author_id' => $this->request->author_id,
            'publisher_id' => $this->request->publisher_id,
            'language_id' => $this->request->language_id,
            'rack_id' => $this->request->rack_id, 
            'cost' => $this->request->cost,
            'quantity' => $this->request->quantity,
        ];
    }
}
