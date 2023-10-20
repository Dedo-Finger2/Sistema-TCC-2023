<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_rota';

    public $timestamps = false;

    public $fillable = [
        'id_volta_onibus',
        'id_ida_onibus',
    ];

    public function idaOnibus(): HasOne
    {
        return $this->hasOne(IdaOnibus::class, 'id_ida_onibus', 'id_endereco');
    }

    public function voltaOnibus(): HasOne
    {
        return $this->hasOne(VoltaOnibus::class, 'id_volta_onibus', 'id_endereco');
    }
}
