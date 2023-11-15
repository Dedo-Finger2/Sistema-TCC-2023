<!--Arquivo modificado-->

@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Login - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tela Usuário TCC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 bg-dark text-white d-flex flex-column justify-content-start align-items-start" style="height: 100vh;">
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
                    <div class="login-container">
                        <h2 class="text-center">Login de Usuário</h2>
                        <form action="#" method="POST" name="login">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" id="senha" name="senha" class="form-control">
                            </div>
                            <br>
                            <input type="submit" value="Login" class="btn btn-primary w-100">
                        </form>
                        <p class="mt-3 text-center">Não tem uma conta? <a href="/cadastro">Cadastre-se aqui</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </body>
</html>

@endsection
