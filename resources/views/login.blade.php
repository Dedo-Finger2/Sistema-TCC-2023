@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Login - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Tela de Login de Usuário</h1>

    {{-- Colocar mensagem à esquerda do formulário seguindo o layout no Figma --}}

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <form action="{{ route('storeLogin') }}" method="POST" name="login">
        @csrf
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email"><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="password"><br>

        <input type="submit" value="Login">
    </form>

    <p>Não tem uma conta? <a href="/cadastro">Cadastre-se aqui</a>.</p>

@endsection
