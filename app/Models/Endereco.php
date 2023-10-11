<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public $fillable = [
        'nome',
        'email',
        'cnpj',
        'senha'
    ];

    protected $timestamps = false;

}
