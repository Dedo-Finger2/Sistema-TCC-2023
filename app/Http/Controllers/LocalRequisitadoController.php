<?php

namespace App\Http\Controllers;

use App\Interfaces\ICriacaoParalela;
use Illuminate\Http\Request;

class LocalRequisitadoController extends Controller implements ICriacaoParalela
{
    public function parallelStore(array $data)
    {
        # Code ...
    }
}