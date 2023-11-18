<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\AutenticacaoTrait;

class UsuarioController extends Controller
{
    use AutenticacaoTrait;

    public function create(): \Illuminate\Contracts\View\View
    {
        # Retornar a tela de cadastro de usuários com os bairros disponiveis no banco
        $bairros = Endereco::all();

        return view('Usuario.cadastro', compact('bairros'));
    }

    public function alert(): \Illuminate\Contracts\View\View
    {
        # Retornar a tela de aviso pós cadastro
        return view('Usuario.aviso');
    }

    // TODO: Concertar
    public function store(Request $request)
    {
        # Pegar os dados enviados do formulário de cadastro
        # Validar os dados
        # Encriptar a senha
        # Se forem válidos
            # Cadastrar novo usuário no banco
            # Logar o usuário com autenticação auth()->login($obj)
            # Enviar usuário para a tela de busca de rotas com uma mensagem de feedback

        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'senha' => 'required',
            'id_endereco' => 'required'
        ]);

        $usuario = new Usuario;

        $usuario->nome = $validatedData['nome'];
        $usuario->email = $validatedData['email'];
        $usuario->senha = $validatedData['senha'];
        $usuario->id_endereco = $validatedData['id_endereco'];

        Auth::login($usuario);

        $usuario->save();
        # Se não forem válidos
            # Retornar para o cadastro com uma mensagem de feedback
        var_dump($request->all());
        return redirect()->route('user.alert')->with('sucess', 'Usuario cadastrado com sucesso');
    }
}
