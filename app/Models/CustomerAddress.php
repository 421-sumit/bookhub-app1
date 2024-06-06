<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
class CustomerAddress extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'customer_addresses';
    protected $fillable = ['customer_id','country_id','state_id','address_1','address_2','city'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function country(): HasOne
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
    public function state(): HasOne
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }
}

