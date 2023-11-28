@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Itinerário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <div class="container">
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
            <h1>Nenhum itinerário encontado para a rota Nº{{ $rotaAtual }}.</h1>
        @endif
    </div>

@endsection
