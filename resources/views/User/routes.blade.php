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
                <a href="{{ route('feedback.create') }}">Quero dar meu feedback!</a>
            </div>
        @endif
        <div class="modal fade modal-dialog modal-dialog-centere" id="exampleModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-2 text-center" id="exampleModalLabel">Itinerário</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Dados aqui...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

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
                                            <button type="button" class="btn btn-outline-success w-100"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal">View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="container">
                            <p class="fs-2 text-center">Nenhuma rota encontrada. Busque uma clicando neste <a
                                    href="{{ route('routes.showSearchForm') }}">link</a></p>
                        </div>
                    @endif
                </div>
                {{-- {{ $rotasEncontradas->links('pagination::bootstrap-4') }} --}}
            </div>
        </div>
    </main>

    <a href="{{ route('feedback.create') }}">Quero dar meu feedback.</a>

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

@endsection
