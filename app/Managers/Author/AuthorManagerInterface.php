<?php
namespace App\Managers\Author;
use App\Managers\Interfaces\CRUDInterface;
use Illuminate\Http\Request;
use App\Managers\Author\Requests\{ CreateAuthorRequest, UpdateAuthorRequest };
use App\Models\Author;

interface AuthorManagerInterface extends CRUDInterface
{
    public function store(CreateAuthorRequest $request);
    public function create(Request $request);
    public function index();

    public function edit(Author $author);

    public function update(Author $author, UpdateAuthorRequest $updateAuthorRequest);

}