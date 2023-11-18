<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id_endereco',
        'nome',
        'email',
        'senha',
    ];

    protected $hidden = [
        '_token',
    ];

    public function enderecos()
    {
        return $this->hasMany(Endereco::class, 'id_endereco', 'id_usuario');
    }

}
