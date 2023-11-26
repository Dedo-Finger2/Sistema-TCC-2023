<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItineraryHasRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id',
        'itinerary_id',
    ];

}
