@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Cadastro - Usuário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Tela de Cadastro de Usuário</h1>

    {{-- Colocar mensagem à esquerda do formulário seguindo o layout no Figma --}}

    <form action="#" method="POST" name="#">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="email">Endereço de e-mail:</label>
        <input type="email" id="email" name="email"><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"><br>

        {{-- Substituir esses selects pelos inputs do Select2 --}}
        <label for="bairro">Bairro:</label>
        <select name="bairro" id="bairro">
            <option value="1">Bairro 1</option>
            <option value="2">Bairro 2</option>
            <option value="3">Bairro 3</option>
        </select><br>

        <label for="logradouro">Logradouro:</label>
        <select name="logradouro" id="logradouro">
            <option value="1">Logradouro 1</option>
            <option value="2">Logradouro 2</option>
            <option value="3">Logradouro 3</option>
        </select><br>

        <label for="cidade">Cidade:</label>
        <select name="cidade" id="cidade">
            <option value="1">Cidade 1</option>
            <option value="2">Cidade 2</option>
            <option value="3">Cidade 3</option>
        </select><br>

        <input type="submit" value="Cadastrar">
    </form>

    <p>Já tem uma conta? <a href="/login">Faça login aqui</a>.</p>

@endsection