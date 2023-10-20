<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdaOnibus extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ida_onibus';

    public $table = 'idas_onibus';


    public $fillable = [
        'horario',
        'id_endereco',
    ];

    public $timestamps = false;

    public function endereco()
    {
        return $this->hasMany(Endereco::class, "id_endereco", "id_ida_onibus");
    }

    public function rota()
    {
        return $this->belongsTo(Rota::class, 'id_ida_onibus');
    }

}
