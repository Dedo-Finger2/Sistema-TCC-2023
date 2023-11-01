@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Login - ???') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Tela de Login de Usuário</title>
</head>
<body>
  <h1>Tela de Login de Usuário</h1>

  <form>
    <label for="email">Endereço de e-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>

    <input type="submit" value="Login">
  </form>

  <p>Esqueceu sua senha? <a href="recuperar-senha.html">Clique aqui</a>.</p>
  <p>Não tem uma conta? <a href="cadastro.html">Cadastre-se aqui</a>.</p>
</body>
</html>

@endsection
