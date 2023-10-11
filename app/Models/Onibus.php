<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onibus extends Model
{
    use HasFactory;

    protected $timestamps = false;
    public $table = "locais_requisitados";

    public $fillable = [
        'numeracao',
        'id_empresa',
    ];
}
