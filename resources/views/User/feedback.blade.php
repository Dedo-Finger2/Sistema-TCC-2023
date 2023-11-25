@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Feedback - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Feedback</h1>

    @if (session('error'))
        <div class="alert alert-danger container w-50 text-center mt-2" role="alert">
            <div>
                <h5 class="text-center alert-heading">Oops!</h5>
                <hr>
            </div>
            <p>{{ session('error') }}</p>
        </div>
    @endif

    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <input type="hidden" name="request_id" value="{{ session('request_id') }}">
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <label for="mensagem-feedback">Mensagem</label>
        <textarea name="comentario" id="mensagem-feedback" cols="30" rows="10"></textarea><br>

        <label for="">Feedback positivo?</label>
        <input type="checkbox" name="feedback">

        <input type="submit" value="Enviar">
    </form>

@endsection
