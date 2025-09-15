<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/app.css" media="screen" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <div class="bg-danger w-100">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background: linear-gradient(135deg, white 30%, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0) 30%);">
            <div class="container">
                <div class="col">
                    <a class="navbar-brand" href="{{route('site.index')}}">
                        <img src="{{ asset('storage/logoetec.png') }}" class="me-4" height="60" width="70" alt="..."> 
                        <img src="{{ asset('storage/cpslogo.jpg') }}" height="60" width="70" alt="...">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link fs-5 active" href="{{route('site.index')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="{{route('site.cursos')}}">Cursos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5" href="{{route('site.departamentos')}}">Departamentos</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link fs-5" href="{{route('site.contato')}}">Contato</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link fs-5 active" href="{{ url('dashboard') }}">Dashboard</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link fs-5" href="{{route('login')}}">Log in</a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link fs-5" href="{{route('register')}}">Registrar</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="col border-start border-end border-dark-subtle text-white">
            <div id="carouselEtec" class="carousel slide carousel-fade">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselEtec" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselEtec" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselEtec" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/EtecView1.jpg') }}" height="350" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block p-3" style="background-color: rgba(0, 0, 0, 0.5);">
                            <h5>Conheça a Etec Zona Leste</h5>
                            <p>A principal escola técnica estadual da zona leste de São Paulo.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/etecsala.jpeg') }}" height="350" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block p-3" style="background-color: rgba(0, 0, 0, 0.5);">
                            <h5>Cursos Técnicos</h5>
                            <p>Oferecemos cursos ténicos em administração, logística, recursos humanos e desenvolvimento de sistemas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/etecauditorio.jpeg') }}" height="350" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block p-3" style="background-color: rgba(0, 0, 0, 0.5);">
                            <h5>Nossa Infraestrutura</h5>
                            <p>Contamos com laboratórios, computadores, auditório, biblioteca e duas quadras.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselEtec" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselEtec" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="row px-5 mb-5">
                <h1 class="pt-3 ps-3 text-center mb-3">Etec Zona Leste: formando profissionais</h1>
                <p class="mx-2 mb-3" style="text-align: justify;">
                    Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região.
                    Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
                    <br>Fundada em 2008, a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua
                    missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los
                    a buscar a excelência acadêmica.
                    <br>Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações.
                    Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração,
                    eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.
                    <br>Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas,
                    eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em
                    equipe, a liderança e a criatividade.
                </p>
            </div>

            <div class="row container mx-auto mb-3">
                <div class="card mb-3 text-bg-dark border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/salamaker.jpg') }}" class="rounded" height="250" width="400" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div>
                                <h1 class="card-title">Cursos</h1>
                                <h4 class="card-text mb-3">Saiba mais sobre os cursos oferecidos nesta unidade.</h4>
                                <a href="{{route('site.cursos')}}" class="btn btn-lg btn-danger">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row border-bottom border-danger mx-auto w-75 mb-4"></div>

            <div class="row container mx-auto mb-3 mt-4">
                <div class="card mb-3 text-bg-dark border-0">
                    <div class="row row-cols-6">
                        <div class="col-md-8">
                            <div>
                                <h1 class="card-title">Departamentos</h1>
                                <h4 class="card-text mb-3">Conheça os departamentos da escola e entre em contato ou agende um horário.</h4>
                                <a href="{{route('site.departamentos')}}" class="btn btn-lg btn-danger">Saiba Mais</a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('storage/departamentos.webp') }}" class="rounded" height="250" width="400" alt="...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row border-bottom border-danger mx-auto w-75 mb-4"></div>

            <div class="row container mx-auto mb-5 mt-4">
                <div class="card mb-3 text-bg-dark border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/contato.webp') }}" class="rounded" height="250" width="400" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div>
                                <h1 class="card-title">Contato</h1>
                                <h4 class="card-text mb-3">Entre em contato com a Etec para esclarecer dúvidas ou dar um feedback</h4>
                                <a href="{{route('site.contato')}}" class="btn btn-lg btn-danger">Entrar em contato</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-danger">
        <div class="container w-75 mx-auto text-white">
            <footer class="py-5">
                <div class="row mx-auto">
                    <div class="col-6 col-md-4 mb-3">
                        <h5>Etec Zona Leste</h5>
                        <ul class="nav flex-column">
                            <p class="text-white mb-2">Avenida Águia de Haia, 2.633 - Cidade AE Carvalho - São Paulo/SP - CEP: 03694-000</p>
                        </ul>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <h5>Telefone</h5>
                        <ul class="nav flex-column">
                            <p class="text-white mb-2">(11) 2045-4000 / 2045-4016</p>
                        </ul>
                    </div>

                    <div class="col-6 col-md-4 mb-3">
                        <h5>Horário de funcionamento:</h5>
                        <ul class="nav flex-column">
                            <p class="text-white mb-2">Seg. a Sex. das 09h às 21h</p>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© 2025 Etec Zona Leste. Todos os direitos reservados.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="https://www.x.com"><img src="{{ asset('storage/xtwitter.png') }}" class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                                </svg>
                            </a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com"><img src="{{ asset('storage/instagram.png') }}" class="bi" width="30" height="30">
                                <use xlink:href="#instagram"></use>
                                </svg>
                            </a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com"><img src="{{ asset('storage/facebook.png') }}" class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>