@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Buscando rotas') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')
    <main class="mb-5">
        <section class="py-2 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold text-success">Busca de Rotas</h1>
                    <p class="lead text-body-secondary">Bem-vindo a tela de busca de rotas! Aqui você poderá digitar o nome de um endereço que gostaria de ir (seu destino)
                        e um endereço que representa um lugar próximo ao seu, ou o endereço em que você se encontra no momento (sua origem). Com os dois devidamente preenchidos
                        você poderá clicar no botão de "Buscar" e visualizar os resultados!
                    </p>
                </div>
                <hr>
                @if (session('error'))
                    <div class="alert alert-danger text-center w-50 mx-auto" role="alert">
                        <h2 class="text-center alert-heading">Oops!</h2>
                        <p>{{ session('error') }}</p>
                        <a href="{{ route('feedback.create') }}">Quero dar meu feedback.</a>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success text-center w-50 mx-auto" role="alert">
                        <h2 class="text-center alert-heading">Sucesso!</h2>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
            </div>
        </section>

        <div class="container w-50">
            <div class="card border border-success border-3 p-4 mb-3 rounded-5 shadow">

                <div class="card-title text-center">
                    <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo-com-titulo-nobg.png"
                        class="img-fluid card-img" style="width: 275px" alt="logo">
                    <h1 class="text-center fs-2 mt-4 mb-4 text-success">Escreva uma origem e um destino</h1>
                    <!-- imagem dentro do card -->
                </div>

                <div class="container w-75">
                    <form action="{{ route('routes.searchRoutes') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="origem">Origem:</label>
                            <select name="busInbound" id="origem" class="select-single form-select">
                                @foreach ($busInbounds as $busInbound)
                                    <option value="{{ $busInbound->address->id }}">{{ $busInbound->address->bairro }}
                                    </option>
                                @endforeach
                            </select><br>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="destino">Destino:</label>
                            <select name="busOutbound" id="destino" class="select-single form-select">
                                @foreach ($busOutbounds as $busOutbound)
                                    <option value="{{ $busOutbound->address->id }}">{{ $busOutbound->address->bairro }}
                                    </option>
                                @endforeach
                            </select><br>
                        </div>

                        <div class="d-grid gap-2 col-2 mx-auto mt-5">
                            <input type="submit" value="Buscar" class="btn btn-outline-success">
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </main>

    <div class="mb-5 text-white"> .</div>
    <div class="mb-5 text-white"> .</div>

@endsection

{{-- <div class="container w-50">
    <div class="card border border-success border-3 p-4 mb-3 rounded-5 shadow">

        <div class="card-title text-center">
            <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo-com-titulo-nobg.png"
                class="img-fluid card-img" style="width: 275px" alt="logo">
            <h1 class="text-center fs-2 mt-4 mb-4 text-success">Escreva uma origem e um destino</h1>
            <!-- imagem dentro do card -->
        </div>

        <div class="container w-75">
            <form action="{{ route('routes.searchRoutes') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label" for="origem">Origem:</label>
                    <select name="busInbound" id="origem" class="select-single form-select">
                        @foreach ($busInbounds as $busInbound)
                            <option value="{{ $busInbound->address->id }}">{{ $busInbound->address->bairro }}
                            </option>
                        @endforeach
                    </select><br>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="destino">Destino:</label>
                    <select name="busOutbound" id="destino" class="select-single form-select">
                        @foreach ($busOutbounds as $busOutbound)
                            <option value="{{ $busOutbound->address->id }}">{{ $busOutbound->address->bairro }}
                            </option>
                        @endforeach
                    </select><br>
                </div>

                <div class="d-grid gap-2 col-2 mx-auto mt-5">
                    <input type="submit" value="Buscar" class="btn btn-outline-success">
                </div>
            </form>
        </div>

    </div>
</div> --}}
