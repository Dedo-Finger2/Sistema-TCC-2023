@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Feedback - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Feedback</h1>

    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="nome" id="nome" name="nome"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"><br>

        <label for="mensagem-feedback">Mensagem</label>
        <textarea name="mensagem" id="mensagem-feedback" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Enviar">
    </form>

@endsection
