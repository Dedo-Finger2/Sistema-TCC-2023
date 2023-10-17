<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdaOnibus extends Model
{
    use HasFactory;

    public $table = 'idas_onibus';


    public $fillable = [
        'horario',
        'id_endereco',
    ];

    public $timestamps = false;
}
