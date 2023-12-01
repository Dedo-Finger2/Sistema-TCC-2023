<!--Arquivo modificado-->

@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Login - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-white d-flex flex-column justify-content-start align-items-start"
                style="height: 100vh; background-image: url('https://th.bing.com/th/id/OIG.bgujAhQDkpF9Rb5rYlH0?w=1024&h=1024&rs=1&pid=ImgDetMain'); background-color: rgba(3, 19, 5, 0.9); background-blend-mode: multiply;">
                <div class="d-flex align-items-center mt-5">
                    <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo_tcc_nobg_white.png"
                        class="shadow-lg" alt="Logo" style="width: 75px;" class="me-2 rounded-3 mt-2">
                    <h2 class="mt-3">Busca de rotas e visualização de itinerários</h2>
                </div>
                <div class="content mt-5 text-left">
                    <h2 class="text-left">Bem-vindo</h2>
                    <p class="text-left">
                    <p>
                        bla bla bla.
                    </p>
                </div>
            </div>

            <div class="col-md-6 bg-light d-flex flex-column align-items-center justify-content-center"
                style="height: 100vh;">
                <div class="login-container">
                    @if (session('error'))
                        <div class="alert alert-danger mb-5">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="text-center">
                        <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo_tcc_nobg.png"
                            class="img-fluid" style="width: 100px" alt="">
                    </div>
                    <h2 class="text-center">Login de Usuário</h2>
                    <hr>
                    <form class="mt-5" action="{{ route('auth') }}" method="POST" name="login">
                        @csrf
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" name="password" class="form-control">
                        </div>
                        <br>
                        <input type="submit" value="Login" class="btn btn-outline-success w-100">
                    </form>
                    <p class="mt-3 text-center">Não tem uma conta? <a class="link-success"
                            href="{{ route('users.create') }}">Cadastre-se aqui</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

@endsection
