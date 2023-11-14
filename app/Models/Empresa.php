<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Empresa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_empresa';

    public $fillable = [
        'nome',
        'email',
        'cnpj',
        'senha'
    ];

    public $timestamps = false;

    public function onibus()
    {
        return $this->hasMany(Onibus::class, 'id_empresa');
    }
}
