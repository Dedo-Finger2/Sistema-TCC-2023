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

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_endereco');
    }

    public function origemUsuario()
    {
        return $this->belongsTo(OrigemUsuario::class, 'id_endereco');
    }

    public function localRequisitado()
    {
        return $this->belongsTo(LocalRequisitado::class, 'id_endereco');
    }

    public function idaOnibus()
    {
        return $this->belongsTo(IdaOnibus::class, 'id_endereco');
    }

    public function voltaOnibus()
    {
        return $this->belongsTo(VoltaOnibus::class, 'id_endereco');
    }

}
