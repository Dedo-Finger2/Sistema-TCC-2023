<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalRequisitado extends Model
{
    use HasFactory;

    protected $timestamps = false;

    public $table = "locais_requisitados";

    public $fillable = [
        'nome',
        'id_endereco',
    ];

}
