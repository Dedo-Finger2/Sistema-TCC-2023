<?php

namespace App\Http\Controllers;

use App\Interfaces\ICriacaoParalela;
use Illuminate\Http\Request;

class RequisicaoController extends Controller implements ICriacaoParalela
{
    public function parallelStore(array $data)
    {
        
    }
}
