<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_requisicao';

    public $timestamps = false;

    public $table = "requisicoes";

    public $fillable = [
        'id_usuario',
        'id_feedback',
        'data_hora',
        'retorno_requisicao',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function feedback()
    {
        return $this->belongsTo(Feedback::class, 'id_feedback');
    }
}
