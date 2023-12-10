@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Feedback') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <div class="container">
        <section class="py-2 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold text-success">Dando Feedback</h1>
                    <p class="lead text-body-secondary">Bem-vindo a tela de feedback! Aqui você pode dar uma sugestão ou fazer uma pequena reclamação para que possamos
                        entender as atuais dificuldades e proporcionar uma melhor experiência a você, usuário! Não esqueça de se atentar ao checkbox de "Feedback positivo", caso
                        seu feedback seja positivo então selecione ele, caso contrário, deixe como está.
                    </p>
                </div>
            </div>
            <hr>
        </section>

        @if (session('error'))
            <div class="alert alert-danger container w-50 text-center mt-2" role="alert">
                <div>
                    <h5 class="text-center alert-heading">Oops!</h5>
                    <hr>
                </div>
                <p>{{ session('error') }}</p>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <!-- Caixa de texto e botões de aceitar termos -->
                <div class="p-5" style="border-radius: 10px;">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <form action="{{ route('feedback.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="request_id" value="{{ session('request_id') }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                                    <label for="mensagem-feedback">Mensagem:</label>
                                    <textarea name="comentario" id="mensagem-feedback" class="form-control" cols="30" rows="10"></textarea><br>

                                    <input type="checkbox" class="form-check-input" name="feedback">
                                    <label for="">Feedback positivo</label>
                                    <br>
                                    <br>
                                    <input class="btn btn-outline-success w-100" type="submit" value="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- @if (session('error'))
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
    </form> --}}
