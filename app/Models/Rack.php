<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;
    protected $fillable = ['rack_name'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class,'rack_id', 'id');
    }
}
