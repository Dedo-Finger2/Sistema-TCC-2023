<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Feedback extends Model
{
    use HasFactory;

    // Configurando o model

    public $table = "feedbacks";

    public $timestamps = false;

    /**
     * lista com os nomes das colunas na migration
     * OBS averiguar colunas na migration feedback
     */
    public $fillable = [
        'comentario',
        'data',
        'feedback',
        'id_usuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function requisicao()
    {
        return $this->hasOne(Requisicao::class, 'id_feedback');
    }

}
