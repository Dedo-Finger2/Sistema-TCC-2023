<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Empresa extends Model
{
    use HasFactory;

    public $fillable = [
        'nome',
        'email',
        'cnpj',
        'senha'
    ];

    public $timestamps = false;

    public function onibus(): BelongsTo
    {
        return $this->belongsTo(Onibus::class, 'id_empresa');
    }

}
