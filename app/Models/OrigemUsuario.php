<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrigemUsuario extends Model
{
    use HasFactory;

    public $table = "origens_usuarios";

    protected $timestamps = false;

    public $fillable = [
        'id_local',
        'id_requisicao',
        'id_usuario',
        'id_endereco',
        'nome'
    ];

}
