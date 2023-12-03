@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row ">
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
                            </tr>
                        @endforeach
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-6">
            <h4>Tabela três, Origens mais requisitadas sem retorno</h4>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6">
            <h4>Tabela quatro, buscas mais recentes</h4>
            <div class="table-responsive">
                <hr>
                <table id="tabela4" class="table table-striped nowrap table-responsive-tcc" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome do destino</th>
                            <th>Nome da partida</th>
                            <th>Se houve ou não retorno</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-12">
            <h4>Tabela de feedbacks</h4>
            <div class="table-responsive">
                <hr>
                <table id="tabela5" class="table table-striped nowrap table-responsive-tcc" style="width:100%">
                    <thead>
                        <tr>
                            <th>Comentário</th>
                            <th>Data</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tabelaFeedbacks as $item)
                            <tr>
                                <td>{{ $item->comentario }}</td>
                                <td>{{ $item->data }}</td>
                                <td>{{ $item->feedback ? 'Comentário positivo' : 'Comentário negativo' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--DIV container das tabelas -->
    <div class="text-white">
        .
    </div>
    <div class="text-white">
        .
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@stop

@section('js')
    <!-- TABELA JS -->
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                responsive: true
            });
        });
    </script>
@stop
