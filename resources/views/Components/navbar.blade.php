<nav class="navbar navbar-expand-lg bg-success bg-opacity-75 ">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('users.create') }}">Cadastro Usuario</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('users.alert') }}">Aviso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('routes.showSearchForm') }}">Busca</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('routes.showRoutes') }}">Rotas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('feedback.create') }}">Feedback</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route("companies.dashboard") }}">Painel de controle</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('logout') }}">Sair</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
