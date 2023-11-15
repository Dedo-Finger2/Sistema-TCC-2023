@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Busca por rotas - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Busca de rotas</h1>

    <form action="{{ route('search.buscar') }}" method="POST">
        @csrf

        <label for="origem">Origem:</label>
        <select name="origemRequisitado" id="origem" class="select-single w-25">
            @foreach ($origensOnibus as $origem)
                <option value="{{ $origem->id_volta_onibus }}">{{ $origem->endereco->bairro }}</option>
            @endforeach
        </select><br>

        <label for="destino">Destino:</label>
        <select name="destinoRequisitado" id="destino" class="select-single w-25">
            @foreach ($destinosOnibus as $destino)
                <option value="{{ $destino->id_ida_onibus }}">{{ $destino->endereco->bairro }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Buscar">
    </form>

    @include('Componentes.footer')
@endsection
