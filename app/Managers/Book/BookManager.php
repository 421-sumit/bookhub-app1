<?php
namespace App\Managers\Book;

use Illuminate\Http\Request;
use App\Managers\Book\Requests\CreateBookRequest;
use App\Managers\Book\Requests\UpdateBookRequest;
use App\Managers\Book\Resources\{ CreateBookResource, DeleteBookResource, IndexBookResource, ViewBookResource, LoadBookResource, EditBookResource, UpdateBookResource};
use App\Models\Book;

class BookManager implements BookManagerInterface
{
    public function store(CreateBookRequest $request)
    {
        return(new CreateBookResource($request))->perform();
    }

    public function create(Request $request){
        return (new LoadBookResource())->load();
    }

    public function index(){
        return (new IndexBookResource())->fetch();
    }

    public function show(Book $book){
        return (new ViewBookResource())->fetch($book);
    }

    public function edit(Book $book){
        return (new EditBookResource())->load($book);
    }

    public function update(Book $book, UpdateBookRequest $request){
        return (new UpdateBookResource($book, $request))->perform();
    }
    public function delete(Book $book){
        return (new DeleteBookResource())->perform($book);
    }
}