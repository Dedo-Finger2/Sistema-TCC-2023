@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Criando empresas - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')
    <h1>Register Company</h1>

    <form action=" {{ route('companies.store') }} " method="post">
        @csrf
        Name: <input type="text" name="nome">
        Email: <input type="email" name="email">
        Password: <input type="password" name="password">
        CNPJ: <input type="text" name="cnpj">
        <input type="submit" value="Register">
    </form>
@endsection
