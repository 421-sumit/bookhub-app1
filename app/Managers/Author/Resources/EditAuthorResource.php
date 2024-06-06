<?php
namespace App\Managers\Author\Resources;
use App\Models\Author;

class EditAuthorResource{
    public function load(Author $author){
        return view('author.update', [
            'author' => $author,
        ]);
    }
}