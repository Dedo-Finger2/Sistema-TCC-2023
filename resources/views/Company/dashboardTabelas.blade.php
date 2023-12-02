@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Painel de controle - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}

<!-- TABELA CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">

@section('content')
    <!-- Div Container -->
    <div class="container mt-4">
        <!-- TABLE HTML -->
        <div class="container">
            <h2>Detalhes das requisições</h2>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <h4>Tabela um, Destinos mais requisitados com retorno</h4>
                <div class="table-responsive">
                    <hr>
                    <table id="tabela1" class="table table-striped nowrap table-responsive-tcc" style="width:100%">
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
                </div>
            </div>

            <div class="col-md-6">
                <h4>Tabela dois, Destinos mais requisitados sem retorno</h4>
                <div class="table-responsive">
                    <hr>
                    <table id="tabela2" class="table table-striped nowrap table-responsive-tcc" style="width:100%">
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
                </div>
            </div>
        </div>


            <h4>Tabela treis, Origens mais requisitados sem retorno</h4>
            <div class="table-responsive">
                <hr>
                <table id="tabela3" class="table table-striped nowrap table-responsive-tcc" style="width:100%">
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
            </div>


            <h4>Tabela quatro, buscas mais recentes</h4>
            <div class="table-responsive mb-5">
                <hr>
                <table id="tabela4" class="table table-striped nowrap table-responsive-tcc" style="width:100%">
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

            <h4>Tabela de feedbacks</h4>
            <div class="table-responsive mb-5">
                <hr>
                <table id="tabela4" class="table table-striped nowrap table-responsive-tcc" style="width:100%">
                    <thead>
                        <tr>
                            <th>Comentario</th>
                            <th>Data</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tabelaFeedbacks as $item)
                            <tr>
                                <td>{{ $item->comentario }}</td>
                                <td>{{ $item->data }}</td>
                                <td>{{ $item->feedback ? 'Comentario positivo' : 'Comentario negativo' }}</td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>

        <!--DIV container das tabelas -->
    </div>

    <!-- TABELA JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

    <script>
        new DataTable('.table-responsive-tcc', {
            responsive: true
        });
    </script>

@endsection
