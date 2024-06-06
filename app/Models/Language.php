<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Language extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'languages';
    protected $fillable = ['language'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'language_id', 'id');
    }
}
