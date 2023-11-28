@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Intinerario - Usuário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

  <div class="container">
    <h1 class="text-center mt-5">Título</h1>

    <p class="text-center">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Nullam faucibus, dolor ac dignissim mattis, nunc felis
      gravida urna, id congue tortor sem sit amet quam. Cras
      fermentum, sapien in congue pulvinar, odio justo finibus
      arcu, vitae vulputate mi eros sed tortor. In nec libero
      massa. Aliquam erat volutpat.
    </p>

    <hr class="bg-secondary">

    <h2 class="text-center mt-5">Itinerário</h2>

    <div class="row">
      <div class="col-sm-2">
        <h3></h3>
      </div>
      <div class="col-sm-3">
        <h3>Voltas</h3>
        <p>
          Lorem ipsum dolor sit amet, paradoxo adipiscing elit.
          Nullam papaaa, dolor ac dignissim mattis, nunc felis
          gravida urna, id cozinha tortor sem sit amet quam.
        </p>
      </div>
      <div class="col-sm-3">
        <h3></h3>
      </div>
      <div class="col-sm-4">
        <h3>Idas</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Nullam faucibus, dolor ac dignissim mattis, nunc felis
          gravida urna, id congue tortor sem sit amet quam.
        </p>
      </div>
    </div>

    <hr class="bg-secondary">
  </div>

@endsection
