<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// TODO: DELETAR!
class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'numeracao',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'id');
    }

    public function routes()
    {
        return $this->belongsToMany(Itinerary::class, 'itineraries', 'id', 'id');
    }
}
