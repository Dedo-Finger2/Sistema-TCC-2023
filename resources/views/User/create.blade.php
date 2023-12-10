<!--Arquivo Modificado-->

@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Cadastro - Usuário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-white d-flex flex-column justify-content-start align-items-start"
                style="height: 100vh; background-image: url('https://th.bing.com/th/id/OIG.bgujAhQDkpF9Rb5rYlH0?w=1024&h=1024&rs=1&pid=ImgDetMain'); background-color: rgba(3, 19, 5, 0.9); background-blend-mode: multiply;">
                <div class="d-flex align-items-center mt-5">
                    <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo_tcc_nobg_white.png"
                        class="shadow-lg" alt="Logo" style="width: 75px;" class="me-2 rounded-3 mt-2">
                    <h2 class="mt-3">BuscaRotas - Busque uma rota e contribua para a gestão do transporte público</h2>
                </div>
                <div class="content mt-5 text-left">
                    <h2 class="text-left">Bem-vindo!</h2>
                    <p class="text-left">
                    <p>
                        Você esta no BuscaRota, uma solução que eventualmente sera integrada a um sistema de busca por
                        ônibus do Vai Card, como por exemplo o Kim.
                        No sistema atual você pode buscar uma rota baseada no endereço que você digitou/escolheu da lista de
                        endereços. <br>
                        Os dados coletados da usa busca são de suma importância para auxiliar na gestão de transporte
                        público, tornando-o mais flexível a necessidade da população! Faça seu cadastro para poder fazer sua
                        primeira busca!
                    </p>
                </div>
            </div>
            <div class="col-md-6 bg-light d-flex flex-column align-items-center justify-content-center"
                style="height: 100vh;">
                <div class="login-container w-50">
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
                        <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo-com-titulo-nobg.png"
                            class="img-fluid" style="width: 275px" alt="logo">
                    </div>
                    <div class="container-title">
                        <h2 class="text-center">Cadastro de Usuário</h2>
                    </div>
                    <hr>
                    <form action="{{ route('users.store') }}" method="POST" name="cadastro">
                        @csrf

                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" name="password" class="form-control" value="{{ old('password') }}">
                        </div>
                        <div class="form-group">
                            <label for="bairro">Bairro:</label>
                            <select name="address_id" id="destino" class="select-single form-select">
                                @foreach ($addresses as $address)
                                    <option value="{{ $address->id }}">{{ $address->bairro }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <input type="submit" value="Cadastrar" class="btn btn-outline-success w-100">
                    </form>
                    <p class="mt-3 text-center">Já tem uma conta? <a class="link-success" href="{{ route('login') }}">Faça
                            login aqui</a>.</p>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-7W3Xu28E1o1RvLw3b8U2RkXoA5b9a6G86j5FqzSN2CCJ5SdUZ0gH9U1F5tLPMfFo" crossorigin="anonymous">
        </script>

    @endsection
