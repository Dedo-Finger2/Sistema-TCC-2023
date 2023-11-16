<nav class="navbar navbar-expand-lg bg-success bg-opacity-75 ">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('user.login') }}">Login Usuario</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('user.create') }}">Cadastro Usuario</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('company.login') }}">Login Empresa</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('user.alert') }}">Aviso</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('route.index') }}">Busca</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('route.rotas') }}">Rotas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('feedback.create') }}">Feedback</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.index') }}">Painel de controle</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('user.logout') }}">Sair</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
