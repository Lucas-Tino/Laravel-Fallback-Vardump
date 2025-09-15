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
            <h1 class="ms-5 pt-3">Nossos Cursos</h1>

            <div class="row mx-auto px-5 mt-4 mb-4">
                <div class="col">
                    <h2>Desenvolvimento de Sistemas</h2>
                    <p>
                        É o profissional que analisa e projeta sistemas. Constrói, documenta, realiza testes e mantém sistemas de informação. Utiliza ambientes de
                        desenvolvimento e linguagens de programação específica. Modela, implementa e mantém bancos de dados.
                        <br>O candidato que ingressar no curso técnico de Desenvolvimento de Sistemas, na modalidade AMS, poderá prosseguir os estudos em uma Fatec
                        no curso superior de tecnologia em Análise e Desenvolvimento de Sistemas.
                    </p>
                    <a href="" class="btn btn-lg btn-danger">Saiba Mais</a>
                </div>
                <div class="col">
                    <img src="{{ asset('storage/ds.jpg') }}" class="rounded" height="350" width="500" alt="...">
                </div>
            </div>

            <div class="row border-bottom border-danger mx-auto w-75 mb-4"></div>

            <div class="row mx-auto px-5 pt-1 mb-4">
                <div class="col">
                    <h2>Administração</h2>
                    <p>
                        O curso técnico de Administração, na modalidade AMS, oferece uma visão abrangente e fundamentada sobre o funcionamento das organizações,
                        abordando desde empresas privadas até ONGs, órgãos públicos, comércio e indústria. Para dominar esses conhecimentos, o estudante necessitará
                        de uma base sólida sobre o conhecimento da grade curricular comum (língua portuguesa, matemática, história e geografia) que são pilares
                        essenciais para compreender os principais assuntos do curso. Os alunos também serão capacitados para planejar estrategicamente, definindo metas
                        e objetivos que orientem o crescimento e a sustentabilidade da organização no futuro.
                    </p>
                    <a href="" class="btn btn-lg btn-danger">Saiba Mais</a>
                </div>
                <div class="col">
                    <img src="{{ asset('storage/administracao.png') }}" class="rounded" height="350" width="500" alt="...">
                </div>
            </div>

            <div class="row border-bottom border-danger mx-auto w-75 mb-4"></div>

            <div class="row mx-auto px-5 pt-1 mb-5">
                <div class="col">
                    <h2>Recursos Humanos</h2>
                    <p>
                        O estudante vai precisar de conhecimentos de língua portuguesa, matemática e história para compreender o curso e aprender a realizar as tarefas
                        sob a responsabilidade do setor de Recursos Humanos de uma empresa, como contratação, demissão e aposentadoria de funcionários e oferta de benefícios
                        (vale-transporte, plano de saúde, vale-refeição etc.), entre outras atividades. Por isso, será importante também estudar as leis que regulam os
                        direitos e deveres do empregador e dos empregados (legislação trabalhista). O estudante vai aprender ainda noções de psicologia para entender como
                        as pessoas se relacionam no ambiente de trabalho, realizar processos de recrutamento e seleção de novos funcionários e promover ações de motivação.
                    </p>
                    <a href="" class="btn btn-lg btn-danger">Saiba Mais</a>
                </div>
                <div class="col">
                    <img src="{{ asset('storage/rh.webp') }}" class="rounded" height="350" width="500" alt="...">
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