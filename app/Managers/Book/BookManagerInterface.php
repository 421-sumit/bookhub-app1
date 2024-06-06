<?php
namespace App\Managers\Book;
use App\Managers\Interfaces\CRUDInterface;
use Illuminate\Http\Request;
use App\Managers\Book\Requests\{ CreateBookRequest, UpdateBookRequest };
use App\Models\Book;

interface BookManagerInterface extends CRUDInterface
{
    public function store(CreateBookRequest $request);

    public function create(Request $request);
    
    public function index();

    public function show(Book $book);

    public function edit(Book $book);

    public function update(Book $book, UpdateBookRequest $updateBookRequest);

    public function delete(Book $book);
}