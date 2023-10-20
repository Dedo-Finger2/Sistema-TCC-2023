<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onibus extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_onibus';

    public $timestamps = false;

    public $table = "onibus";

    public $fillable = [
        'numeracao',
        'id_empresa',
    ];

    public function empresa()
    {
        return $this->hasMany(Empresa::class, 'id_empresa', 'id_onibus');
    }

    public function itinerario()
    {
        return $this->belongsTo(Itinerario::class, 'id_itinerario');
    }

}
