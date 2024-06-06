<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'genres';
    protected $fillable = ['genre'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'genre_id', 'id');
    }
}
