<nav class="navbar bg-success bg-gradient p-2 mt-3 rounded-3 container shadow-sm ">
    <div class="container navbar-expand-sm text-white">
        <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo_tcc_nobg_white.png" class="img-fluid rounded me-4" style="width: 50px;"
            alt="logo">
        <a href="#" class="navbar-brand d-flex align-items-center text-white"><i class="text-white"></i>Busca
            Ônibus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"><span
                class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <!-- adicionando uma margem a esquerda pros itens de menu ficar na direita-->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('routes.showSearchForm') }}" class="nav-link text-white">Buscar rotas</a>
                </li>
                <!-- CRIANDO UM DROPDOWN-->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">???</a>
                    <!-- fazendo o dropdown ficar a esquerda-->
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="#" class="dropdown-item">Arembepe</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Melhor lugar</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Do</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Mundo</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">WRYYYYYYYYY</a>
                        </li>
                    </ul>
                </li>
                <li class="me-5">

                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="btn btn-danger bg-gradient">Logout</a>
                </li>
                <!--FIM DO DROPDOWN-->
            </ul>
        </div>
    </div>
</nav>
