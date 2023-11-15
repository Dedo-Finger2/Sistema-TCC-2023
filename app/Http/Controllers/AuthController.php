<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View
    {
        return view("Usuario.cadastro");
    }

    public function alert(): \Illuminate\Contracts\View\View
    {
        return view('Usuario.aviso');
    }

    public function store(Request $request)
    {
        var_dump($request->all());
    }

    public function login(Request $request): \Illuminate\Contracts\View\View
    {
        return view("login");
    }

    public function storeLogin(Request $request)
    {
        var_dump($request->all());
    }

    public function logout()
    {

    }
}
