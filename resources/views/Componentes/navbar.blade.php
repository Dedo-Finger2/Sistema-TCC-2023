<nav class="navbar navbar-expand-lg bg-success bg-opacity-75 ">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('auth.login') }}">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('auth.storeRegister') }}">Cadastro</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('auth.alert') }}">Aviso</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('search.index') }}">Busca</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('search.rotas') }}">Rotas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('feedback.index') }}">Feedback</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.index') }}">Painel de controle</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
