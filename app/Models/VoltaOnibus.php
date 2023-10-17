<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoltaOnibus extends Model
{
    use HasFactory;

    public $table = "voltas_onibus";

    public $timestamps = false;

    public $fillable = [
        'horario',
        'id_endereco',
    ];

}
