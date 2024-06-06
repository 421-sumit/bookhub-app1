<?php
namespace App\Managers\Author\Resources;
use App\Models\Author;

class IndexAuthorResource{
    public function fetch(){
        $authors = Author::get();
        return view('author.index', [
            'authors' => $authors,
        ]);
    }
}