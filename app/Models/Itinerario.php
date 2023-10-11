<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerario extends Model
{
    use HasFactory;

    protected $timestamps = false;

    public $fillable = [
        'codigo_itinerario',
        'id_onibus',
        'id_rota',
    ];

}
