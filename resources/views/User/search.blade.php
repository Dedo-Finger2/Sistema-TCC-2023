@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Buscando rotas') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50%;
        }

        .card {
            width: 50%;
            display: flex;
            /* Adicione outras propriedades de estilo conforme necessário para o seu layout */
        }


        .mb-3 {
            margin-left: 5%;
        }

        .form-select {
            width: 50%;
        }

        .d-grid {
            margin: 2%;
        }

        .card-img {
            position: absolute;
            top: 80px;
            /* Adicionando espaçamento do topo */
            right: 30px;
            /* Adicionando espaçamento da direita */
            width: 150px;
            /* Aumentando a largura */
            height: auto;
            /* A altura será ajustada automaticamente para manter a proporção */
        }

        /* Estilos para o título h1 */
        .card-title h1 {
            margin-bottom: 20px;
            /* Adicionando margem inferior */
            color: #14bd60;
            /* Alterando a cor do texto para cinza escuro */
        }
    </style>

    <main class="mb-5">
        <section class="py-2 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold text-success">Busca de Rotas</h1>
                    <p class="lead text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        ducimus qui, expedita esse illum magni. Ut aperiam unde officia molestiae, minus beatae quia
                        recusandae ullam repudiandae! Aut impedit blanditiis perspiciatis corrupti vero voluptatibus
                        consectetur? Explicabo, velit! Pariatur totam harum, ratione accusamus aut cupiditate esse quisquam
                        quasi, maxime aspernatur, consequuntur consectetur!</p>
                </div>
                <hr>
            </div>
        </section>

        <div class="container mb-5">
            <div class="card border-success mb-3">
                <div class="card-title">
                    <h1 class="text-center fs-2 mt-3">Escreva uma origem e um destino</h1>
                </div>

                <!-- imagem dentro do card -->
                <img src="data:image/png;base64,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"
                    alt="Descrição da imagem" class="card-img">

                <form action="{{ route('routes.searchRoutes') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="origem">Origem:</label>
                        <select name="busInbound" id="origem" class="select-single form-select">
                            @foreach ($busInbounds as $busInbound)
                                <option value="{{ $busInbound->address->id }}">{{ $busInbound->address->bairro }}</option>
                            @endforeach
                        </select><br>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="destino">Destino:</label>
                        <select name="busOutbound" id="destino" class="select-single form-select">
                            @foreach ($busOutbounds as $busOutbound)
                                <option value="{{ $busOutbound->address->id }}">{{ $busOutbound->address->bairro }}</option>
                            @endforeach
                        </select><br>
                    </div>

                    <div class="d-grid gap-2 col-2 mx-auto mt-5">
                        <input type="submit" value="Buscar" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <div class="mb-5 text-white"> .</div>
    <div class="mb-5 text-white"> .</div>

@endsection

{{-- <form action="{{ route('routes.searchRoutes') }}" method="POST">
        @csrf

        <label for="destino">Destino:</label>
        <select name="busOutbound" id="destino" class="select-single w-25">
            @foreach ($busOutbounds as $busOutbound)
                <option value="{{ $busOutbound->address->id }}">{{ $busOutbound->address->bairro }}</option>
            @endforeach
        </select><br>

        <label for="origem">Origem:</label>
        <select name="busInbound" id="origem" class="select-single w-25">
            @foreach ($busInbounds as $busInbound)
                <option value="{{ $busInbound->address->id }}">{{ $busInbound->address->bairro }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Buscar">
    </form> --}}
