<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'address_id',
    ];

    public function requests()
    {
        return $this->belongsToMany(Request::class, 'user_origins', 'id', 'id');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'id');
    }

}
