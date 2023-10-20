<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function endereco(): HasMany
    {
        return $this->hasMany(Endereco::class, 'id_endereco', 'id_volta_onibus');
    }
}
