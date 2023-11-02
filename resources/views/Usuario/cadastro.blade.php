@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Cadastro - Usuário') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}
@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Tela de Cadastro de Usuário</title>
</head>
<body>
  <h1>Tela de Cadastro de Usuário</h1>

  <form>
    <label for="nome">Nome completo:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="email">Endereço de e-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>

    <label for="confirmar-senha">Confirmar senha:</label>
    <input type="password" id="confirmar-senha" name="confirmar-senha" required><br>

    <label for="data-nascimento">Data de nascimento:</label>
    <input type="date" id="data-nascimento" name="data-nascimento" required><br>

    <label for="genero">Gênero:</label>
    <select id="genero" name="genero">
      <option value="masculino">Masculino</option>
      <option value="feminino">Feminino</option>
      <option value="outro">Outro</option>
    </select><br>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone"><br>

    <label for="pais">País:</label>
    <select id="pais" name="pais">
      <option value="brasil">Brasil</option>
      <option value="estados-unidos">Estados Unidos</option>
      <!-- Adicione mais opções de países aqui -->
    </select><br>

    <input type="checkbox" id="termos" name="termos" required>
    <label for="termos">Aceito os Termos e Condições</label><br>

    <input type="submit" value="Cadastrar">
  </form>

  <p>Já tem uma conta? <a href="pagina-de-login.html">Faça login aqui</a>.</p>
</body>
</html>

@endsection
