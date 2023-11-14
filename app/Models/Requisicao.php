<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
