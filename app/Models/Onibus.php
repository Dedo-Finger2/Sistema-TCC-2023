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
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function rotas()
    {
        return $this->belongsToMany(Rota::class, 'rotas_onibus', 'id_onibus', 'id_rota');
    }

}
