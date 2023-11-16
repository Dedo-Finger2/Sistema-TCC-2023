<?php

namespace App\Http\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait AutenticacaoTrait
{
    public function login(): \Illuminate\Contracts\View\View
    {
        return view("Usuario.login");
    }

    public function auth(Request $request)
    {
        # Pegar os dados vindos do formulário de login
        # Validar os dados
        # Se forem válidos
            # Validar se houve uma tentativa de validação
                # Criar uma nova sessão pro usuário cadastrado
                # Redirecionar ele de forma "intended" para a tela de busca de rotas
        # Se não forem válidos
            # Retornar para o login com uma mensagem de feedback

        $credentials = $request->only('email', 'senha');

        if (Auth::auth($credentials)) {

            #cria uma sessão de login
            $request->session()->regenerate();

            return redirect()->route('user.alert');

        }else {
            return back()->with('error', 'Email ou senha incorretas');
        }
    }

    public function logout(Request $request)
    {
        # Des-autenticar o usuário
        # Invalidar a sessão dele
        # Criar outro token para o navegador do usuário
        # Redirecionar o usuário para a tela de login
    }
}
