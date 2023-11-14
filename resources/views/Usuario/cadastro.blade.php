@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Cadastro - Usuário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Tela de Cadastro de Usuário</h1>

    {{-- Colocar mensagem à esquerda do formulário seguindo o layout no Figma --}}

    <form action="{{ route('registerUser') }}" method="POST" name="#">
        @csrf
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="email">Endereço de e-mail:</label>
        <input type="email" id="email" name="email"><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"><br>

        {{-- Substituir esses selects pelos inputs do Select2 --}}
        </select><br>

        <label for="bairro">Bairro:</label>
        <select name="id_endereco" id="bairro" class="select-single">
            <option value="id_endereco">Bairro1</option>
            <option value="id_endereco">Bairro2</option>
            <option value="id_endereco">Bairro3</option>
            <option value="id_endereco">Bairro4</option>
        </select><br>

        <input type="submit" value="Cadastrar">
    </form>

    <p>Já tem uma conta? <a href="/login">Faça login aqui</a>.</p>

@endsection
