<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VoltaOnibus extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_volta_onibus';

    public $table = "voltas_onibus";

    public $timestamps = false;

    public $fillable = [
        'horario',
        'id_endereco',
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'id_endereco');
    }

    public function rota()
    {
        return $this->hasOne(Rota::class, 'id_ida_onibus');
    }

}
