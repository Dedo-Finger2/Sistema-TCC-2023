<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View
    {
        # Retornar a tela de cadastro de usuários
        return view("Usuario.cadastro");
    }

    public function alert(): \Illuminate\Contracts\View\View
    {
        # Retornar a tela de aviso pós cadastro
        return view('Usuario.aviso');
    }

    public function store(Request $request)
    {
        # Pegar os dados enviados do formulário de cadastro
        # Validar os dados
        # Se não forem válidos
            # Retornar para o cadastro com uma mensagem de feedback
        # Se forem válidos
            # Cadastrar novo usuário no banco
            # Enviar usuário para a tela de busca de rotas com uma mensagem de feedback
        var_dump($request->all());
    }

    public function login(Request $request): \Illuminate\Contracts\View\View
    {
        # Retornar a tela de login de usuários
        return view("login");
    }

    public function storeLogin(Request $request)
    {
        # Pegar os dados vindos do formulário de login
        # Validar os dados
        # Se não forem válidos
            # Retornar para o login com uma mensagem de feedback
        # Se forem válidos
            # Enviar usuário para a tela de busca de rotas com uma mensagem de feedback
        var_dump($request->all());
    }

    public function logout()
    {
        # Redirecionar o usuário para a tela de login
    }
}
