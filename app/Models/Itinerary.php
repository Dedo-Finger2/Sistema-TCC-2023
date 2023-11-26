<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
    ];

    public function routes()
    {
        return $this->belongsToMany(ItineraryHasRoute::class, 'itinerary_has_routes', 'id' . 'id');
    }
}
