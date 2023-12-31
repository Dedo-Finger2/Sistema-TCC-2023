<!--Arquivo Modificado-->

@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Cadastro - Usuário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 bg-dark text-white d-flex flex-column justify-content-start align-items-start"
                style="height: 100vh;">
                <div class="d-flex align-items-center">
                    <img src="images/Logo-TCC.jpeg" alt="Logo" style="width: 75px;" class="me-2 rounded-3 mt-2">
                    <h2 class="mt-3">Título ao lado do logo</h2>
                </div>
                <div class="content mt-5 text-left">
                    <h2 class="text-left">Bem-vindo</h2>
                    <p class="text-left">
                    <p>
                        Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo
                        Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo
                        Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo
                        Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo Frase de Bem-vindo
                    </p>
                </div>
            </div>
            <div class="col-md-6 bg-light d-flex flex-column align-items-center justify-content-center"
                style="height: 100vh;">
                <div class="login-container w-50">
                    <div class="container-title">
                        <h2 class="text-center">Cadastro de Usuário</h2>
                    </div>
                <form action="#" method="POST" name="cadastro">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <label for="bairro">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" class="form-control">
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Cadastrar" class="btn btn-primary w-100">
                </form>
                <p class="mt-3 text-center">Já tem uma conta? <a href="/login">Faça login aqui</a>.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-7W3Xu28E1o1RvLw3b8U2RkXoA5b9a6G86j5FqzSN2CCJ5SdUZ0gH9U1F5tLPMfFo" crossorigin="anonymous">
    </script>

@endsection
