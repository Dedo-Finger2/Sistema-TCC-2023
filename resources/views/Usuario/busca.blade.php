@extends('layout')

@section('title', 'Busca por rotas - ???')

@section('content')

    @if (session('error'))
        <div>
            <h2>{{ session('error') }}</h2>
        </div>
        <a href="{{ route('feedback.index') }}">Quero dar meu feedback.</a>
    @endif

    <form action="{{ route('search.buscar') }}" method="POST">
        @csrf

        <label for="destino">Destino:</label>
        <select name="destinoRequisitado" id="destino" class="select-single w-25">
            @foreach ($destinosOnibus as $destino)
                <option value="{{ $destino->endereco->id_endereco }}">{{ $destino->endereco->bairro }}</option>
            @endforeach
        </select><br>

        <label for="origem">Origem:</label>
        <select name="origemRequisitado" id="origem" class="select-single w-25">
            @foreach ($origensOnibus as $origem)
                <option value="{{ $origem->endereco->id_endereco }}">{{ $origem->endereco->bairro }}</option>
            @endforeach
        </select><br>



        @include('Componentes.footer')
    @endsection
