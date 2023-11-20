<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ICriacaoParalela;

class RequestController extends Controller implements ICriacaoParalela
{
    public function parallelStore(array $data)
    {
        # code...
    }
}
