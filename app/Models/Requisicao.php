<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = "requisicoes";

    public $fillable = [
        'id_usuario',
        'id_feedback',
        'data_hora',
    ];

}
