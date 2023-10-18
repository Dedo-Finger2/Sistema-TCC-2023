<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = "requisicoes";

    public $fillable = [
        'id_usuario',
        'id_feedback',
        'data_hora',
    ];

    public function origemUsuario(): BelongsTo
    {
        return $this->belongsTo(OrigemUsuario::class, 'id_requisicao');
    }

    public function usuario(): HasMany
    {
        return $this->hasMany(Usuario::class, 'id_usuario', 'id_requisicao');
    }

    public function feedback(): HasMany
    {
        return $this->hasMany(Feedback::class, 'id_feedback', 'id_requisicao');
    }
}
