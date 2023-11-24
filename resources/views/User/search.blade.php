@extends('layout')

@section('title', 'Busca por rotas - ???')

@section('content')

    @if (session('error'))
        <div class="alert alert-danger container w-50 text-center mt-2" role="alert">
            <div>
                <h5 class="text-center alert-heading">Oops!</h5>
                <hr>
            </div>
            <p>{{ session('error') }}</p>
            <a href="{{ route('feedback.create') }}">Quero dar meu feedback!</a>
        </div>
    @endif

    <form action="{{ route('routes.searchRoutes') }}" method="POST">
        @csrf

        <label for="destino">Destino:</label>
        <select name="busOutbound" id="destino" class="select-single w-25">
            @foreach ($busOutbounds as $busOutbound)
                <option value="{{ $busOutbound->address->id }}">{{ $busOutbound->address->bairro }}</option>
            @endforeach
        </select><br>

        <label for="origem">Origem:</label>
        <select name="busInbound" id="origem" class="select-single w-25">
            @foreach ($busInbounds as $busInbound)
                <option value="{{ $busInbound->address->id }}">{{ $busInbound->address->bairro }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Buscar">
    </form>

@endsection
