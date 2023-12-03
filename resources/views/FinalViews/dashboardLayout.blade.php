<aside class="container-fluid">
    <!-- Inicio Sidebar -->
    <div class="sidebar close overflow-auto visible">
        <!-- Inicio Barra superior -->
        <div class="logo-details">
            <i class="bx bx-menu"></i>
            <span class="logo_name">Menu</span>
        </div>
        <!-- Fim Barra superior -->

        <!-- Inicio corpo Sidebar -->
        <ul class="nav-links">
            <!-- Item único -->
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Item único</span>
                </a>
            </li>

            <li>
                <a href="../../Public/Manuais/Empresa/introducaoEmpresa.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Empresa</span>
                    '' </a>
            </li>

            <li>
                <a href="../../Public/Manuais/Usuario/Introdução.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Usuario</span>
                </a>
            </li>


            <!-- Dropdown -->
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Dropdown</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="#">Teste</a></li>
                    <li><a href="#">Teste2</a></li>
                    <li><a href="#">Teste3</a></li>
                    <li><a href="#">Teste4</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Fim Sidebar -->
</aside>

<!-- Conteúdo da página -->
<section class="container-fluid main-content ">
    <header>
        <!--começo da navbar-->
        <nav class="navbar bg-success bg-gradient p-2 shadow-sm">
            <div class="container navbar-expand-sm text-white ms-4 ps-4">
                <img src="https://raw.githubusercontent.com/Dedo-Finger2/Sistema-TCC-2023/main/resources/imgs/logo_tcc_nobg_white.png"
                    class="img-fluid rounded me-4" style="width: 50px;" alt="logo">
                <a href="#" class="navbar-brand d-flex align-items-center text-white"><i
                        class="text-white"></i>Busca
                    Ônibus</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"><span
                        class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <!-- adicionando uma margem a esquerda pros itens de menu ficar na direita-->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ route('companies.home') }}" class="nav-link text-white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('routes.showSearchForm') }}" class="nav-link text-white">Buscar rotas</a>
                        </li>
                        <!-- CRIANDO UM DROPDOWN-->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-white"
                                data-bs-toggle="dropdown">Opções</a>
                            <!-- fazendo o dropdown ficar a esquerda-->
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a href="{{ route('companies.dashboard2') }}" class="dropdown-item">Gráficos</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item">Tabelas</a>
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

                        <li class="nav-item me-5">

                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white">{{ Auth::guard('admin')->user()->nome }}</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="btn btn-danger bg-gradient">Logout</a>
                        </li>
                        <!--FIM DO DROPDOWN-->
                    </ul>
                </div>
            </div>
        </nav>
        <!--fim da navbar-->
    </header>
    <article>
        <div class="container">
            <h1 class="text-center titulo-color ">Neque porro quisqua</h1>
            <h3 class="text-center titulo-color">quia dolor sit amet, consectetur
            </h3>
            <p class="text-center ms-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut nibh convallis, interdum lorem
                in, semper quam. Nunc sed mauris nisl. Pellentesque vestibulum lorem neque, in tristique massa
                blandit vel. Suspendisse potenti. Suspendisse nec augue eget nisl egestas facilisis. Nullam
                malesuada rutrum libero eu convallis. In sit amet vehicula sem. Sed vitae pellentesque lorem. Mauris
                egestas fermentum commodo. Morbi ac mattis nibh. Ut sed lectus at arcu facilisis laoreet sit amet
                vel urna. In posuere placerat tortor, pretium pharetra eros tempor et. Vestibulum ut sollicitudin
                risus. Fusce at sem volutpat, consequat est in, suscipit tellus</p>
        </div>
    </article>
</section>

<!-- JS para a sidebar -->
<script src="../../js/dashboardLayout.js"></script>
