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
                @foreach ($tabelaUm  as $item)
                    <tr>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->total_requisicoes}}</td>
                        <td>{{$item->horario_mais_requisitado}}</td>

                @endforeach
                    </tr>
            </tbody>
        </table>
    </div>

    <h2>Tabela dois, Destinos mais requisitados com retorno</h2>
    <br>

    @foreach ($tabelaUm  as $item)
        <p>{{$item}}</p>
    @endforeach


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


@endsection
