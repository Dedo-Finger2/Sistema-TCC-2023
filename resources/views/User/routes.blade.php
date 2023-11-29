@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Visualizando rotas - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <main class="mb-5">
        <section class="py-2 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold text-success">Listagem de Rotas</h1>
                    <p class="lead text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        ducimus qui, expedita esse illum magni. Ut aperiam unde officia molestiae, minus beatae quia
                        recusandae ullam repudiandae! Aut impedit blanditiis perspiciatis corrupti vero voluptatibus
                        consectetur? Explicabo, velit! Pariatur totam harum, ratione accusamus aut cupiditate esse quisquam
                        quasi, maxime aspernatur, consequuntur consectetur!</p>
                </div>
            </div>
            <hr>
        </section>

        @if (session('warn'))
            <div class="alert alert-warning container w-25 text-center" role="alert">
                <div>
                    <h2 class="text-center alert-heading">Aviso!</h2>
                </div>
                <p>{{ session('warn') }}</p>
                <a href="{{ route('feedback.create') }}">Quero dar meu feedback.</a>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success container w-25 text-center" role="alert">
                <div>
                    <h2 class="text-center alert-heading">Sucesso!</h2>
                </div>
                <p>{{ session('success') }}</p>
                <a href="{{ route('feedback.create') }}">Quero dar meu feedback.</a>
            </div>
        @endif

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
                    @if (isset($routesFound))
                        @foreach ($routesFound as $route)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <div class="card-header">
                                        <h1>{{ $route->id }}</h1>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title mb-2 fs-5">{{ $route->busInbound->horario }} -
                                            {{ $route->busOutbound->horario }}</p>
                                        <h4 class="card-text">{{ $route->busInbound->address->bairro }} -
                                            {{ $route->busOutbound->address->bairro }}</h4>
                                        <br>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('routes.view', ['id' => $route->id]) }}" class="btn btn-outline-success w-100">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="container mb-5 mt-5">
                            <p class="fs-2 text-center">Nenhuma rota encontrada. Busque uma clicando neste <a href="{{ route('routes.showSearchForm') }}">link</a></p>
                        </div>
                    @endif
                </div>
                <div class="text-white mb-5">.</div>
                <div class="text-white mb-5">.</div>
                {{-- {{ $rotasEncontradas->links('pagination::bootstrap-4') }} --}}
            </div>
        </div>
    </main>
@endsection
