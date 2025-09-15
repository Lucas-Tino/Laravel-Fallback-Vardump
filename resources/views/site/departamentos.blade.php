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
            <h1 class="ms-5 pt-3">Departamentos</h1>

            <div class="row mx-auto px-5 mt-4 mb-4">
                <div class="row">
                    <h2 class="text-decoration-underline">Secretaria Acadêmica</h2>
                    <h4>Horário de Atendimento</h4>
                    <table class="table table-striped table-dark mb-3">
                        <thead>
                            <tr>
                                <th scope="col">Segunda-Feira</th>
                                <th scope="col">Quarta-Feira</th>
                                <th scope="col">Sexta-Feira</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>08h00min. às 09h30min</td>
                                <td>14h30min. às 15h30min</td>
                                <td>19h30min. às 20h30min</td>
                            </tr>
                            <tr>
                                <td>08h00min. às 09h30min</td>
                                <td>14h30min. às 15h30min</td>
                                <td>19h30min. às 20h30min</td>
                            </tr>
                            <tr>
                                <td>08h00min. às 09h30min</td>
                                <td>14h30min. às 15h30min</td>
                                <td>19h30min. às 20h30min</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4>Equipe:</h4>
                    <p>
                        Diretor de Serviços Acadêmicos – Ênio Ramos Araújo  
                        <br>Agente Técnico e Administrativo – Diva Neide Bortoli
                    </p>

                    <h4>Contato:</h4>
                    <p>
                        E-mail: e211acad@cps.sp.gov.br
                        <br>Telefones: (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009
                    </p>
                </div>
            </div>

            <div class="row border-bottom border-danger mx-auto w-75 mb-4"></div>

            <div class="row mx-auto px-5 mt-4 mb-4">
                <div class="row">
                    <h2 class="text-decoration-underline">Coordenação de Cursos</h2>
                    <h4>Coordenadores:</h4>
                    <p>
                        Giovanna Littiere (Novotec Administração)
                        <br>Leandro (Novotec Logística)
                        <br>Marcelo Collado (Novotec Desenvolvimento de Sistemas)
                        <br>Cibelle Ferreria Francoso (Novotec RH)
                        <br>Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)
                    </p>

                    <h4>Contato:</h4>
                    <p>
                        Telefones: (11) 2045-4018
                    </p>
                </div>
            </div>

            <div class="row border-bottom border-danger mx-auto w-75 mb-4"></div>

            <div class="row mx-auto px-5 mt-4 mb-4">
                <div class="row">
                    <h2 class="text-decoration-underline">Direção</h2>
                    <h4>Diretor(a):</h4>
                    <p>
                        Amanda Bueno
                    </p>
                    <h4>Assessor Técnico Administrativo II</h4>
                    <p>
                        Patrick Moreno da Silva
                    </p>

                    <h4>Contato:</h4>
                    <p>
                        E-mail: e211dir@cps.sp.gov.br
                        <br>Telefones: (11) 2045-4016 | (11) 2045-4011
                    </p>
                </div>
            </div>

            <div class="row border-bottom border-danger mx-auto w-75 mb-4"></div>

            <div class="row mx-auto px-5 mt-4 mb-4">
                <div class="row">
                    <h2 class="text-decoration-underline">Coordenação Pedagógica</h2>
                    <h4>Coordenador(a):</h4>
                    <p>
                        Professora Ms. Madalena Oliveira Lima
                    </p>

                    <h4>Contato:</h4>
                    <p>
                        Telefone: (11) 2045-4017
                        <br>E-mail: e211pedagogica@cps.sp.gov.br
                    </p>
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