<?php
namespace App\Managers\Author;

use Illuminate\Http\Request;
use App\Managers\Author\Requests\CreateAuthorRequest;
use App\Managers\Author\Requests\UpdateAuthorRequest;
use App\Managers\Author\Resources\{ CreateAuthorResource, IndexAuthorResource, EditAuthorResource, UpdateAuthorResource};
use App\Models\Author;

class AuthorManager implements AuthorManagerInterface
{
    public function store(CreateAuthorRequest $request)
    {
        return(new CreateAuthorResource($request))->perform();
    }

    public function create(Request $request){
        return view('author.create');
    }

    public function index(){
        return (new IndexAuthorResource())->fetch();
    }

    public function edit(Author $author){
        return (new EditAuthorResource())->load($author);
    }

    public function update(Author $author, UpdateAuthorRequest $request){
        return (new UpdateAuthorResource($author, $request))->perform();
    }
}