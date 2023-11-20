@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Aviso - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

<h1>Tela de aviso</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim dolore libero asperiores odit exercitationem esse necessitatibus provident error omnis, facilis deleniti ratione voluptas nihil blanditiis quia amet tenetur vero.</p>

    <form action="{{ route('routes.showSearchForm') }}" method="get">
        @csrf
        <input type="checkbox" name="termos"> Concordar com o roubo de dados.<br>

        <input type="submit" value="Proceguir">
    </form>

@endsection
