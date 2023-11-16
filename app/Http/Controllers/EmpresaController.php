<?php

namespace App\Http\Controllers;

use App\Http\Traits\AutenticacaoTrait;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    use AutenticacaoTrait;

    public function login()
    {
        return view("Empresa.login");
    }

    public function auth(Request $request)
    {
        # code...
        var_dump($request->all());
    }

}
