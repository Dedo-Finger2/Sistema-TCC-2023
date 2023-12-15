@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Intinerario - Usuário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <div class="container">
        @if (count($itinerariosRotas) > 0)
            <section class="py-2 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-bold text-success">Visualização detalhada da rota</h1>
                        <p class="lead text-body-secondary">Bem-vindo a tela de visualização detalhada da rota! Aqui você vê mais detalhes da rota que selecionou na tela anterior.
                            Todas as Idas e Voltas que compõe essa rota são encontradas aqui.
                        </p>
                    </div>
                </div>
                <hr>
            </section>

            @foreach ($itinerariosRotas as $itinerario => $rotas)
                <h1 class="mt-5 mb-3 text-center">{{ $itinerario }}</h1>

                <div class="row">
                    <div class="col-sm-5">
                        <h3>Voltas</h3>
                        <p>
                            @foreach ($rotas as $rota)
                                @if ($rota->id == $rotaAtual)
                                    <strong>{{ $rota->busInbound->address->bairro }}</strong>
                                @else
                                    {{ $rota->busInbound->address->bairro }},
                                @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="col-md-1">
                        <h1></h1>
                    </div>
                    <div class="col-sm-5">
                        <h3>Idas</h3>
                        <p>
                            @foreach ($rotas as $rota)
                                @if ($rota->id == $rotaAtual)
                                    <strong>{{ $rota->busOutbound->address->bairro }}</strong>
                                @else
                                    {{ $rota->busOutbound->address->bairro }},
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
        @else
            {{-- TODO: Implementar uma forma de voltar pra tela de listagem sem perder tudo --}}
            <div class="text-center mb-5 mt-5">
                <h1>Não foi possível encontrar mais detalhes da rota.</h1>
            </div>

            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
            <div class="text-white mb-5">.</div>
        @endif
    </div>

@endsection


{{-- <div class="container">
    @if (count($itinerariosRotas) > 0)
        <h1>Visualização de itinerários</h1>

        @foreach ($itinerariosRotas as $itinerario => $rotas)
            <h1 class="mt-5 mb-3 text-center shadow-sm p-5">{{ $itinerario }}</h1>
            <h2>VOLTAS:</h2>
            <div class="mb-5">
                @foreach ($rotas as $rota)
                    @if ($rota->id == $rotaAtual)
                        <strong>{{ $rota->busInbound->address->bairro }}</strong>
                    @else
                        {{ $rota->busInbound->address->bairro }},
                    @endif
                @endforeach
            </div>

            <h2>IDAS:</h2>
            <div class="mb-5">
                @foreach ($rotas as $rota)
                    @if ($rota->id == $rotaAtual)
                        <strong>{{ $rota->busOutbound->address->bairro }}</strong>
                    @else
                        {{ $rota->busOutbound->address->bairro }},
                    @endif
                @endforeach
            </div>
            <hr>
        @endforeach
    @else
        {{-- TODO: Implementar uma forma de voltar pra tela de listagem sem perder tudo --}}
{{-- <h1>Nenhum itinerário encontado para a rota Nº{{ $rotaAtual }}.</h1> --}}
{{-- @endif
        </div> --}}
