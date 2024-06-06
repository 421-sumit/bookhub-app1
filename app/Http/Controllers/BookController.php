<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Managers\Book\BookManagerInterface;
use App\Managers\Book\Requests\{ CreateBookRequest, UpdateBookRequest };
use App\Models\Book;

class BookController extends Controller
{
    private BookManagerInterface $bookManager;

    public function __construct(BookManagerInterface $bookManager){
        $this->bookManager = $bookManager;
    }

    public function store(CreateBookRequest $request){ 
        return $this->bookManager->store($request);
    }
    
    public function create(Request $request){
        return $this->bookManager->create($request);
    }

    public function index(Request $request){
        return $this->bookManager->index($request);
    }

    public function show(Book $book){
        return $this->bookManager->show($book);
    }

    public function edit(Book $book){
        return $this->bookManager->edit($book);
    }

    public function update(Book $book, UpdateBookRequest $request){
        return $this->bookManager->update( $book, $request);
    }
    public function delete(Book $book){
        return  $this->bookManager->delete($book);
    }
}
