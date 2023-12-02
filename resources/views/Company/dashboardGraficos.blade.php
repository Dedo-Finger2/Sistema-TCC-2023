@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Painel de controle') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}

<!-- TABELA CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">


<!-- TABELA JS -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>



@section('content')

    <div class="container mt-4">

        <div class="col-md-6">
            <h2> Relação das requisições</h2>
        </div>

        <div class="row">
            <div class="col-md-6">

                <label>Top 5 destinos</label>
                <div style="max-width: 100%; max-height: 300px;">
                    {!! $graficoUm->container() !!}
                </div>
            </div>

            <div class="col-md-6">
                <label>Top 5 origens</label>
                <div style="max-width: 100%; max-height: 300px;">
                    {!! $graficoDois->container() !!}
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <label>Requisições por origem</label>
            <div style="width: 1200px; max-height: 300px;">
                {!! $graficoQuatro->container() !!}
            </div>

            <div class="col-md-6">
                <label>Destinos mais requisitados por turno</label>
                <div style="width: 1200px; max-height: 300px;">
                    {!! $graficoTreis->container() !!}
                </div>
            </div>
        </div>
    </div>
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
@endsection
