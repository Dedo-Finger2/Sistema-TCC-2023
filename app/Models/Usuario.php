<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_usuario';

    public $timestamps = false;

    public $fillable = [
        'id_endereco',
        'nome',
        'email',
        'senha',
    ];

    public function enderecos(): HasMany
    {
        return $this->hasMany(Endereco::class, 'id_endereco', 'id_usuario');
    }

}
