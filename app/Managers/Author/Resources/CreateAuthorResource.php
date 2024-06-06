<?php

namespace App\Managers\Author\Resources;

use Illuminate\Http\Request;
use App\Managers\Author\Requests\CreateAuthorRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class CreateAuthorResource
{
    private $request;
   
    public function __construct(CreateAuthorRequest $request){
        $this->request=$request;
    }

    public function perform(){
        $this->request->validated();
        try{
            $author=Author::create($this->saveAttributes());
            return redirect()->route('authors.index')->with('success', 'Author created successfully.');
            info("New Author created",[$author]);
        } catch (Exception $ex) {
            info("Exception occurred!!", $ex->getMessage);
            return redirect()->route('author.create')->with('error', 'Failed to create author.');
        }
    }

    protected function saveAttributes():array {
        return [
            'name'=>$this->request->name,
            'birth_date'=>$this->request->birth_date,
            'nationality'=>$this->request->nationality,
        ];
    }
}
