<?php

namespace App\Managers\Author\Resources;

use Illuminate\Http\Request;
use App\Managers\Author\Requests\UpdateAuthorRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class UpdateAuthorResource
{
    private $request;
    private $author;

    public function __construct(Author $author, UpdateAuthorRequest $request){
        $this->author=$author;
        $this->request=$request;
    }

    public function perform(){

        $this->request->validated();
        try{
            $author = $this->author->update($this->saveAttributes());
            info("author updatetd!!",[$author]);
            return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
        } catch (Exception $e) {
            info("Exception occurred!!", $ex->getMessage);
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
