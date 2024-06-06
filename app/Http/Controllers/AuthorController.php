<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Managers\Author\AuthorManagerInterface;
use App\Managers\Author\Requests\{ CreateAuthorRequest, UpdateAuthorRequest };

use App\Models\Author;

class AuthorController extends Controller
{
    private AuthorManagerInterface $authorManager;

    public function __construct(AuthorManagerInterface $authorManager){
        $this->authorManager = $authorManager;
    }

    public function store(Request $request){ 
       // return $this->authorManager->store($request);
       $author=Author::create(
        [
            'name'=>$request->name,
            'birth_date'=>$request->birth_date,
            'nationality'=>$request->nationality,
        ]
       );
    }
    
    public function create(Request $request){
        return $this->authorManager->create($request);
    }

    public function index(Request $request){
        return $this->authorManager->index($request);
    }

    public function edit(Author $author){
        return $this->authorManager->edit($author);
    }

    public function update(Author $author, UpdateAuthorRequest $request){
        return $this->authorManager->update( $author, $request);
    }
}
