<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'books';
    protected $fillable = ['title','genre_id','author_id','publisher_id','language_id','rack_id', 'cost','quantity'];

    public function author(): HasOne
    {
        return $this->hasOne(Author::class, 'id','author_id');
    }
    public function genre(): HasOne
    {
        return $this->hasOne(Genre::class,'id', 'genre_id');
    }
    public function publisher(): HasOne
    {
        return $this->hasOne(Publisher::class, 'id','publisher_id');
    }
    public function language(): HasOne
    {
        return $this->hasOne(Language::class, 'id','language_id');
    }
    public function rack(): HasOne
    {
        return $this->hasOne(Rack::class, 'id','rack_id');
    }
}
