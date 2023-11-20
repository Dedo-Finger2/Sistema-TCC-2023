<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrigin extends Model
{
    use HasFactory;

    protected $fillable = [
        'requested_location_id',
        'request_id',
        'user_id',
        'address_id',
        'nome',
    ];
}
