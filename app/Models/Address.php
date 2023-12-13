<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;


    protected $fillable = [
        'logradouro',
        'bairro',
        'cidade',
    ];



    public function users()
    {
        return $this->hasMany(User::class, 'id');
    }

    public function busOutbound()
    {
        return $this->hasMany(BusOutbound::class, 'id');
    }

    public function busInbound()
    {
        return $this->hasMany(BusInbound::class, 'id');
    }

}
