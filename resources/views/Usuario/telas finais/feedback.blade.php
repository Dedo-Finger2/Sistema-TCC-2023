@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Feedback - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

 <div class="container">
        <div class="row mt-4">
                <div class="col-12 text-center">
                    <!-- Título abaixo do topo -->
                    <h1>Titulo 2</h1>
                </div>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <!-- Parágrafo -->
                    <p>Texto Texto Texto Texto
                        Texto Texto Texto Texto Texto
                        Texto Texto Texto Texto Texto
                        Texto Texto Texto Texto Texto
                        Texto Texto Texto Texto Texto
                        Texto Texto Texto Texto Texto
                    </p>
                </div>
            </div>

            <hr style="border-top: 0.px solid #ccc;">

            <div class="row mt-4 justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <!-- Caixa de texto e botões de aceitar termos -->
                    <div class="bg-light p-3" style="border-radius: 10px;">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" id="nome" name="nome" class="form-control">
                                    <div id="emailHelp" class="form-text" style="color: #808080;">Digite seu Nome</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control">
                                    <div id="emailHelp" class="form-text" style="color: #808080;">Digite seu E-mail</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="mensagem">Mensagem</label>
                                    <textarea name="mensagem" id="mensagem" cols="30" rows="5" class="form-control"></textarea>
                                    <div id="emailHelp" class="form-text" style="color: #808080;">Digite seu Feedback</div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-success mt-3 w-100">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
