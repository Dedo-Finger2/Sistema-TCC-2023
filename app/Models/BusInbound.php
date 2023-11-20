<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusInbound extends Model
{
    use HasFactory;

    protected $fillable = [
        'horario',
        'address_id',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function route()
    {
        return $this->hasOne(Route::class, 'id');
    }

}
