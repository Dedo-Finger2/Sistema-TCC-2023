<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onibus extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = "onibus";

    public $fillable = [
        'numeracao',
        'id_empresa',
    ];

}
