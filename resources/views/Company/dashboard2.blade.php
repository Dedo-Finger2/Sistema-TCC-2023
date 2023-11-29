@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Painel de controle - ???') {{-- Inserindo o título desta página --}}

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
    <h1>Painel Controle Provisório</h1>

    <div class="container">

        <!-- TABLE HTML -->

        <h2>Tabela um, Destinos mais requisitados com retorno</h2>

        <table id="tabela1" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Total de Requisições</th>
                    <th>Horário Mais recente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tabelaUm as $item)
                    <tr>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->total_requisicoes }}</td>
                        <td>{{ $item->horario_mais_recente }}</td>
                @endforeach
                </tr>
            </tbody>
        </table>

        <h2>Tabela dois, Destinos mais requisitados sem retorno</h2>

        <hr>
        <table id="tabela2" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Total de Requisições</th>
                    <th>Horário Mais recente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tabelaDois as $item)
                    <tr>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->total_requisicoes }}</td>
                        <td>{{ $item->horario_mais_recente }}</td>
                @endforeach
                </tr>
            </tbody>
        </table>

        <h2>Tabela treis, Origens mais requisitados sem retorno</h2>

        <hr>
        <table id="tabela3" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Total de Requisições</th>
                    <th>Horário Mais recente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tabelaTreis as $item)
                    <tr>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->total_requisicoes }}</td>
                        <td>{{ $item->horario_mais_recente }}</td>
                @endforeach
                </tr>
            </tbody>
        </table>

        <h2>Tabela quatro, buscas mais recentes</h2>

        <hr>
        <table id="tabela4" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nome do destino</th>
                    <th>Nome da partida</th>
                    <th>Se ouve ou não retorno</th>
                    <th>Horário Mais recente</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tabelaQuatro as $item)
                    <tr>
                        <td>{{ $item->nomeDestino }}</td>
                        <td>{{ $item->nomeOrigem }}</td>
                        <td>{{ $item->status ? 'Rota atendida' : 'Rota não atendida' }}</td>
                        <td>{{ $item->horario_mais_recente }}</td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <!--DIV container das tabelas -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <label>Top 5 destinos</label>
                <div style="max-width: 100%; max-height: 300px;">
                    {!! $chart->container() !!}
                </div>
            </div>

            <div class="col-md-6">
                <label>Top 5 origens</label>
                <div style="max-width: 100%; max-height: 300px;">
                    {!! $chartDois->container() !!}
                </div>
            </div>

                <div class="col-md-6">
                    <label>Destinos mais requisitados por turno</label>
                    <div style="max-width: 100%; max-height: 300px;">
                        {!! $chartTreis->container() !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Requisições por origem</label>
                    <div style="max-width: 100%; max-height: 300px;">
                        {!! $chartQuatro->container() !!}
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

            {!! $chart->script() !!}
            {!! $chartDois->script() !!}
            {!! $chartTreis->script() !!}
            {!! $chartQuatro->script() !!}
        @endsection
