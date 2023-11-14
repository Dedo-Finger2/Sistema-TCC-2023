<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>
    @extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'welcome - Welcome to blade') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

    <h1>Welcome to blade</h1>

@endsection
</body>
</html>
