@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- Info extra --}}
    <div class="row">
        <div class="col md-3">
            <div class="card bg-dark bg-gradient shadow-sm">
                <div class="card-body">
                    <h4>Total de requisições</h4>
                    <h2 class="card-text">{{ $totalRequisicoes }}</h2>
                </div>
            </div>
        </div>

        <div class="col md-3">
            <div class="card bg-primary bg-gradient shadow-sm">
                <div class="card-body">
                    <h4>Usuários cadastrados</h4>
                    <h2 class="card-text">{{ $usuariosRegistrados }}</h2>
                </div>
            </div>
        </div>

        <div class="col md-3">
            <div class="card bg-info bg-gradient shadow-sm">
                <div class="card-body">
                    <h4>Locais sem retorno</h4>
                    <h2 class="card-text">{{ $porcentagemLocaisSemRetorno }}%</h2>
                </div>
            </div>
        </div>

        <div class="col md-3">
            <div class="card bg-@if ($porcentagemFeedbackPositivo > 50)success @elseif($porcentagemFeedbackPositivo < 50)danger @elseif($porcentagemFeedbackPositivo == 50)warning @endif bg-gradient shadow-sm">
                <div class="card-body">
                    <h4>Média satisfação</h4>
                    <h2 class="card-text">{{ $porcentagemFeedbackPositivo }}%</h2>
                </div>
            </div>
        </div>
    </div>

    <hr>
    {{-- Pizzas + Linhas --}}
    <div class="row">
        <div class="col-md-8">

            <div class="">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold"><strong>Destinos mais requisitados por ano</strong></h5>
                        <span class="small" style="color: gray;">Requisições nos ultimos 3 anos.</span>
                        <div class="w-100" style="height: 31.3vh">
                            {!! $graficoCinco->container() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold"><strong>Destinos mais requisitados por turno</strong></h5>
                        <span class="small" style="color: gray;">Requisições por turno do dia.</span>
                        <div class="w-100" style="height: 31.3vh">
                            {!! $graficoQuatro->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold"><strong>Top 5 destinos</strong></h5>
                    <span class="small" style="color: gray;">Os 5 destinos mais requisitados.</span>
                    <div class="" style="max-width: 100%; max-height: 300px;">
                        {!! $graficoUm->container() !!}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold"><strong>Top 5 origens</strong></h5>
                    <span class="small" style="color: gray;">As 5 origens que mais requisitam um destino.</span>
                    <div style="max-width: 100%; max-height: 300px;">
                        {!! $graficoDois->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Barra --}}
    <div class=" ms-5">
        <div class="card">
            <div class="card-body">
                <h5 class="fw-bold"><strong>Requisições por origem</strong></h5>
                <span class="small" style="color: gray;">Destino mais requisitado por origem no formato: Origem > Destino.</span>
                <div class="w-100" style="margin-left: -63px">
                    {!! $graficoTreis->container() !!}
                </div>
            </div>
        </div>
    </div>

    {{-- Espaçamento --}}
    <div class="text-white">
        .
    </div>
    <div class="text-white">
        .
    </div>

    <!-- Graficos JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- TABELA JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {!! $graficoUm->script() !!}
    {!! $graficoDois->script() !!}
    {!! $graficoTreis->script() !!}
    {!! $graficoQuatro->script() !!}
    {!! $graficoCinco->script() !!}

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('js')
    <!-- TABELA JS -->

@stop
