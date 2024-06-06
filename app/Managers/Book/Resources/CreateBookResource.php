<?php

namespace App\Managers\Book\Resources;

use Illuminate\Http\Request;
use App\Managers\Book\Requests\CreateBookRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class CreateBookResource
{
    private $request;
   
    public function __construct(CreateBookRequest $request){
        $this->request=$request;
    }

    public function perform(){
        $this->request->validated();
        try{
            $book = Book::create($this->saveAttributes());
            info("book created!!",[$book]);
            return redirect()->route('books.index')->with('success', 'Book created successfully.');
        } catch (Exception $e) {
            return redirect()->route('book.create')->with('error', 'Failed to create book.');
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
