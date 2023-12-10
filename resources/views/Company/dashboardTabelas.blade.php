@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    {{-- <div class="card">
    <div class="card-body">
        <h5 class="fw-bold"><strong>Destinos mais requisitados por ano</strong></h5>
        <span class="small" style="color: gray;">Requisições nos ultimos 3 anos.</span>

    </div>
</div> --}}

    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold"><strong>Destinos com retorno</strong></h5>
                    <span class="small" style="color: gray;">Destinos mais requisitados com retorno.</span>
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
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold"><strong>Destinos sem retorno</strong></h5>
                    <span class="small" style="color: gray;">Destinos mais requisitados sem retorno.</span>
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
        </div>
    </div>

    <div class="row ">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold"><strong>Origens sem retorno</strong></h5>
                    <span class="small" style="color: gray;">Origens mais requisitadas sem retorno.</span>
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
            </div>
        </div>

        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold"><strong>Log de requisições</strong></h5>
                    <span class="small" style="color: gray;">Log das buscas mais recentes feitas.</span>
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
        </div>
    </div>

    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="fw-bold"><strong>Tabela de feedbacks</strong></h5>
                    <span class="small" style="color: gray;">Todos os feedabacks feitos.</span>
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
