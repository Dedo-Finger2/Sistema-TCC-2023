<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        # Encriptar a senha
        # Se forem válidos
            # Cadastrar novo usuário no banco
            # Logar o usuário com autenticação auth()->login($obj)
            # Enviar usuário para a tela de busca de rotas com uma mensagem de feedback
        # Se não forem válidos
            # Retornar para o cadastro com uma mensagem de feedback
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
        # Se forem válidos
            # Validar se houve uma tentativa de validação
                # Criar uma nova sessão pro usuário cadastrado
                # Redirecionar ele de forma "intended" para a tela de busca de rotas
        # Se não forem válidos
            # Retornar para o login com uma mensagem de feedback
    }

    public function logout(Request $request)
    {
        # Des-autenticar o usuário
        # Invalidar a sessão dele
        # Criar outro token para o navegador do usuário
        # Redirecionar o usuário para a tela de login
    }
}
