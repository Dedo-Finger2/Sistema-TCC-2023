@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Visualizando rotas - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <main class="mb-5">
        <section class="py-2 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Listagem de Rotas</h1>
                    <p class="lead text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        ducimus qui, expedita esse illum magni. Ut aperiam unde officia molestiae, minus beatae quia
                        recusandae ullam repudiandae! Aut impedit blanditiis perspiciatis corrupti vero voluptatibus
                        consectetur? Explicabo, velit! Pariatur totam harum, ratione accusamus aut cupiditate esse quisquam
                        quasi, maxime aspernatur, consequuntur consectetur!</p>
                </div>
            </div>
            <hr>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
                    @foreach ($rotasEncontradas as $rota)
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <p class="card-title mb-2 fs-5">{{ $rota->voltaOnibus->horario }} - {{ $rota->idaOnibus->horario }}</p>
                                    <h4 class="card-text">{{ $rota->voltaOnibus->endereco->bairro }} - {{ $rota->idaOnibus->endereco->bairro }}</h4>
                                    <br>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="button" class="btn btn-sm btn-outline-success w-100">View</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- {{ $rotasEncontradas->links('pagination::bootstrap-4') }} --}}
            </div>
        </div>
    </main>

    <a href="{{ route('feedback.index') }}">Quero dar meu feedback.</a>

    @include('Componentes.footer')

@endsection
