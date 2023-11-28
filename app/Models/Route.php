<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;


    protected $fillable = [
        'bus_outbound_id',
        'bus_inbound_id',
    ];

    public function busOutbound()
    {
        return $this->belongsTo(BusOutbound::class);
    }

    public function busInbound()
    {
        return $this->belongsTo(BusInbound::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function itineraries()
    {
        return $this->belongsToMany(Itinerary::class, 'itinerary_has_routes', 'id', 'id');

    }

}
