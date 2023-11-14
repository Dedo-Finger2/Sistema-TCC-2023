<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function createUser(): \Illuminate\Contracts\View\View
    {
        $enderecos = Endereco::all();

        return view("Usuario.cadastro", compact("enderecos"));
    }

    public function aviso()
    {
        return view('Usuario.aviso');
    }

    public function registerUser(Request $request)
    {

    }

    public function login(Request $request): \Illuminate\Contracts\View\View
    {
        return view("login");
    }

    public function storeLogin(Request $request)
    {

    }

    public function logout()
    {

    }
}
