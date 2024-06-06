<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $table = 'states';
    protected $fillable = ['state_name','state_id'];

    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'state_id', 'id');
    }
    public function customeradress(): HasMany
    {
        return $this->hasMany(CustomerAddress::class, 'state_id', 'id');
    }
}
