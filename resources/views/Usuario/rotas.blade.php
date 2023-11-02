@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Visualizando rotas - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Listagem de rotas</h1>

    {{-- Usar laravel para listar com variávies aqui --}}
    <ul>
        <li>[Horário] Origem --> [Horário] Destino - <Button>Visualizar completo</Button></li>
    </ul>

    @include('Componentes.footer')

@endsection