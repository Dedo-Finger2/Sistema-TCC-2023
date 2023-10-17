<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rota extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'id_volta_onibus',
        'id_ida_onibus',
    ];

}
