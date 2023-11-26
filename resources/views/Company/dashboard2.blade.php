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

    <h2>Tabela um, Destinos mais requisitados com retorno</h2>
    <br>

    <div class="container">
        <!-- TABLE HTML -->
        <table id="tabelas" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Total de Requisições</th>
                    <th>Horário Mais Requisitado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tabelaUm as $item)
                    <tr>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->total_requisicoes }}</td>
                        <td>{{ $item->horario_mais_requisitado }}</td>
                @endforeach
                </tr>
            </tbody>
        </table>

        <h2>Tabela dois, Destinos mais requisitados sem retorno</h2>

        <hr>
        <table id="tabelas" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Total de Requisições</th>
                    <th>Horário Mais Requisitado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tabelaDois as $item)
                    <tr>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->total_requisicoes }}</td>
                        <td>{{ $item->horario_mais_requisitado }}</td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Top 5 destinos</h3>
                <canvas id="destinosTop5" style="max-width: 100%; max-height: 300px;"></canvas>
            </div>
            <div class="col-md-6">
                <h3>Top 5 origens</h3>
                <canvas id="origensTop5" style="max-width: 100%; max-height: 300px;"></canvas>
            </div>
            <div class="col-md-6">
                <h3>Requisições por origem</h3>
                <canvas id="requisicoesPorOrigem" style="max-width: 100%; max-height: 300px;"></canvas>
            </div>
            <div class="col-md-6">
                <h3>Destinos mais requisitados por turno</h3>
                <canvas id="requisicoesPorTurno" style="max-width: 100%; max-height: 300px;"></canvas>
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
        new DataTable('#tabelas', {
            responsive: true
        });
    </script>

    @parent
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('destinosTop5').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Categoria 1', 'Categoria 2', 'Categoria 3'],
                    datasets: [{
                        label: 'Exemplo de Gráfico de Pizza',
                        data: [30, 40, 30], // Dados de exemplo (substitua pelos seus dados)
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    // Opções do gráfico (títulos, cores, etc.)
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('origensTop5').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Categoria 1', 'Categoria 2', 'Categoria 3'],
                    datasets: [{
                        label: 'Exemplo de Gráfico de Pizza',
                        data: [30, 40, 30], // Dados de exemplo (substitua pelos seus dados)
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    // Opções do gráfico (títulos, cores, etc.)
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('requisicoesPorOrigem').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Categoria 1', 'Categoria 2', 'Categoria 3'],
                    datasets: [{
                        label: 'Exemplo de Gráfico de Pizza',
                        data: [30, 40, 30], // Dados de exemplo (substitua pelos seus dados)
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    // Opções do gráfico (títulos, cores, etc.)
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('requisicoesPorTurno').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Categoria 1', 'Categoria 2', 'Categoria 3'],
                    datasets: [{
                        label: 'Exemplo de Gráfico de Pizza',
                        data: [30, 40, 30], // Dados de exemplo (substitua pelos seus dados)
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    // Opções do gráfico (títulos, cores, etc.)
                }
            });
        });
    </script>
@endsection
