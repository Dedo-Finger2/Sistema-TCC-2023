@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <label class="fs-1" class="fs-3">Top 5 destinos</label>
            <div class="" style="max-width: 100%; max-height: 300px;">
                {!! $graficoUm->container() !!}
            </div>
        </div>

        <div class="col-md-6">
            <label class="fs-3"> Top 5 origens</label>
            <div style="max-width: 100%; max-height: 300px;">
                {!! $graficoDois->container() !!}
            </div>
        </div>

    </div>

    <div class=" mt-5">
        <label class="fs-3"> Requisições por origem</label>
        <div class="w-100">
            {!! $graficoQuatro->container() !!}
        </div>
    </div>

    <div class=" ms-5" >
        <label class="fs-3">Destinos mais requisitados por turno</label>
        <div class="w-100" style="margin-left: -63px">
            {!! $graficoTreis->container() !!}
        </div>
    </div>

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

    <script>
        // --TABELAS--
        new DataTable('#tabela1', {
            responsive: true
        });

        new DataTable('#tabela2', {
            responsive: true
        });

        new DataTable('#tabela3', {
            responsive: true
        });

        new DataTable('#tabela4', {
            responsive: true
        });
    </script>

    @parent
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {!! $graficoUm->script() !!}
    {!! $graficoDois->script() !!}
    {!! $graficoTreis->script() !!}
    {!! $graficoQuatro->script() !!}

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('js')
    <!-- TABELA JS -->

@stop
