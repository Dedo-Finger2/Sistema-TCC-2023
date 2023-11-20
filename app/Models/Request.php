<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'feedback_id',
        'data_hora',
        'retorno_requisicao',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function feedback()
    {
        return $this->belongsTo(Feedback::class, 'id');
    }
}
