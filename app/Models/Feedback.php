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

    /**
     * caso a migration não tenha a coluna create created_at ou update_at
     * coloque public $timestamps = false;
     */
    public $timestamps = false;

    /**
     * relacionamento um para muitos deve ser feiro com esse método
     * @return hasMany
     * OBS: na model deve ser colocado o método belongTo
     *
     */

    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class,"id_usuario","id_feedback");
    }

}
