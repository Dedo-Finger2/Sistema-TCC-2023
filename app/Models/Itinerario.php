<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerario extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'codigo_itinerario',
        'id_onibus',
        'id_rota',
    ];

    public function onibus()
    {
        return $this->hasMany(Onibus::class, 'id_onibus', 'id_itinerario');
    }

    public function rotas()
    {
        return $this->hasMany(Rota::class, 'id_rota', 'id_itinerario');
    }
}
