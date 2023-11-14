<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_endereco';

    public $fillable = [
        'logradouro',
        'bairro',
        'cidade',
    ];

    public $timestamps = false;

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_endereco');
    }

    public function idaOnibus()
    {
        return $this->hasMany(IdaOnibus::class, 'id_endereco');
    }

    public function voltaOnibus()
    {
        return $this->hasMany(VoltaOnibus::class, 'id_endereco');
    }

}
