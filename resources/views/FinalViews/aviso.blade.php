@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Aviso - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6 text-center">
                <img src="logo.png" alt="Logo" class="img-fluid">
                <h1 class="mt-4">Título 1</h1>
                <h2 class="mt-4">Título 2</h2>
                <p class="mt-4">Aviso Aviso Aviso Aviso Aviso Aviso
                    Aviso Aviso Aviso Aviso Aviso Aviso Aviso Aviso
                    Aviso Aviso Aviso Aviso Aviso Aviso Aviso Aviso
                    Aviso Aviso Aviso Aviso Aviso Aviso Aviso Aviso
                    Aviso Aviso Aviso Aviso Aviso Aviso Aviso Aviso
                    Aviso Aviso Aviso Aviso Aviso Aviso Aviso Aviso
                </p>
                <input type="checkbox" id="aceitarTermos">
                <label for="aceitarTermos">Aceitar Termos</label><br>
                <button class="btn btn-success mt-4">Enviar</button>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
