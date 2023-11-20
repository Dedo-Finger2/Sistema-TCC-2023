<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'bus_id',
        'route_id',
    ];

    public function buses()
    {
        return $this->hasMany(Bus::class, 'id');
    }

    public function routes()
    {
        return $this->hasMany(Route::class, 'id');
    }
}
