<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrigemUsuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_origem_usuario';

    public $table = "origens_usuarios";

    public $timestamps = false;

    public $fillable = [
        'id_local',
        'id_requisicao',
        'id_usuario',
        'id_endereco',
        'nome'
    ];



}
