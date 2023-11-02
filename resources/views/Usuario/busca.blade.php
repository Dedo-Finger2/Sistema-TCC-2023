@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Busca por rotas - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Busca de rotas</h1>

    <form action="#" method="POST">
        {{-- Substituir esses selects pelos inputs do Select2 --}}
        <label for="origem">Origem:</label>
        <select name="origem" id="origem">
            <option value="1">Origem 1</option>
            <option value="2">Origem 2</option>
            <option value="3">Origem 3</option>
        </select><br>

        <label for="destino">Destino:</label>
        <select name="destino" id="destino">
            <option value="1">Destino 1</option>
            <option value="2">Destino 2</option>
            <option value="3">Destino 3</option>
        </select><br>

        <input type="submit" value="Buscar">
    </form>

    @include('Componentes.footer')

@endsection
