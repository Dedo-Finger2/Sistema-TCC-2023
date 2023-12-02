@extends('layout') {{-- Buscando o layout padrão e aplicando nesta página --}}

@section('title', 'Painel de controle') {{-- Inserindo o título desta página --}}

{{-- Sessão onde vai ser colocado todo o conteúdo do body desta página --}}

@section('content')
    <!-- Header-->
    <header class="bg-success bg-gradient shadow-lg py-5 mt-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Bem-Vindo, {{ Auth::guard('admin')->user()->nome }}!
                        </h1>
                        <p class="lead fw-normal text-white-50 mb-4">Aqui você terá acesso rápido a algumas outras telas
                            importantes desse projeto, além disso, também poderá ver informações adicionais sobre o mesmo.
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center rounded" style="width: 440px;">
                    <img class="img-fluid rounded-3 my-5"
                        src="https://th.bing.com/th/id/OIG.bgujAhQDkpF9Rb5rYlH0?w=1024&h=1024&rs=1&pid=ImgDetMain"alt="..." />
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <hr>
    </div>

    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">Telas acessíveis aos admins.</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <i class="text-success fa-solid fa-house"></i>
                            <h2 class="h5">Home</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <i class="text-success fa-solid fa-table"></i>
                            <h2 class="h5">Tabelas</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <i class="text-success fa-solid fa-chart-pie"></i>
                            <h2 class="h5">Gráficos</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col h-100">
                            <i class="text-success fa-solid fa-comments"></i>
                            <h2 class="h5">Feedbacks</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"Daqui pra frente é só pra trás!"</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3"
                                src="https://th.bing.com/th/id/OIP.RjS4o4cri1_Is8GHEXp4eQHaEK?rs=1&pid=ImgDetMain"
                                alt="..." width="50" height="47" />
                            <div class="fw-bold">
                                Emmanuel Dias
                                <span class="fw-bold text-success mx-1">/</span>
                                CEO, Pesquisa de Satisfação
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Acesso às telas</h2>
                        <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top"
                            src="https://d3pef22pb68mhq.cloudfront.net/wp-content/uploads/2018/06/25133814/Excel-graphs.jpg"
                            alt="..." />
                        <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link"
                                href="{{ route('companies.dashboardGraficos') }}">
                                <h5 class="card-title mb-3">Gráficos</h5>
                            </a>
                            <p class="card-text mb-0">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top"
                            src="https://th.bing.com/th/id/R.6091335154a54ec6d011aa83f92e0511?rik=nsUDq0KArkgDOQ&riu=http%3a%2f%2fbehstant.com%2fblog%2fwp-content%2fuploads%2f2015%2f11%2f003-datatables-database.png&ehk=b48rlFL7FYRDlRaHUcbWkqEksHGVpzYu376wOiqpbDQ%3d&risl=&pid=ImgRaw&r=0"
                            alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link"
                            href="{{ route('companies.dashboardTabela') }}">
                            <h5 class="card-title mb-3">Tabelas</h5>
                            </a>
                            <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each
                                card. Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top"
                            src="https://th.bing.com/th/id/R.fdd177877d3d7628167fde8ba0c8cc7f?rik=EHe5KIBFHl1%2bng&riu=http%3a%2f%2fwww.cen.eu%2fnews%2fbrief-news%2fPublishingImages%2fBusinessMenTalk_Feedback-bubble_Copyright-BoBaa22_shutterstock_190537427.jpg&ehk=fs%2bQbs2oKWGWxtg4XCMpyxVDDAoIbvT0LOSif51Uetc%3d&risl=&pid=ImgRaw&r=0"
                            alt="..." />
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link"
                            href="{{ route('companies.dashboardTabela') }}">
                            <h5 class="card-title mb-3">Feedbacks</h5>
                            </a>
                            <p class="card-text mb-0">Some more quick example text to build on the card title and make up
                                the bulk of the card's content.</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

@endsection
