<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onibus extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = "onibus";

    public $fillable = [
        'numeracao',
        'id_empresa',
    ];

    public function empresas()
    {
        return $this->hasMany(Empresa::class, 'id_empresa', 'id_onibus');
    }

    public function itinerario()
    {
        return $this->belongsTo(Itinerario::class, 'id_itinerario', 'id_onibus');
    }

}
