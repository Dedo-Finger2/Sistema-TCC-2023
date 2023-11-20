<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ICriacaoParalela;

class UserOriginController extends Controller implements ICriacaoParalela
{
    public function parallelStore(array $data)
    {
        # code...
    }
}
