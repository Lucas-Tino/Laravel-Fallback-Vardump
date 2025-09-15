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
            <div class="row">
                <div class="carousel">
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/contato2.webp') }}" height="350" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>

            <div class="row mx-3">
                <h3 class="pt-3">Entre em contato conosco!</h3>
                <p>
                    Entre em contato com a equipe da Etec Zona Leste para tirar dúvidas, dar feedback, relatar problemas, ou qualquer coisa.
                </p>
            </div>

            <div class="row justify-content-center mx-3 mb-5" data-bs-theme="dark">
                <form action="{{ route('site.contato') }}" method="get">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo:</label>
                        <input type="text" class="form-control bg-dark text-white" id="nome" name="nome" placeholder="Digite seu nome...">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control bg-dark text-white" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Endereço de email</label>
                        <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="nome@exemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="motivo" class="form-label">Motivo do contato</label>
                        <select name="motivo" class="form-select bg-dark text-white">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="Dúvida">Dúvida</option>
                            <option value="Elogio">Elogio</option>
                            <option value="Reclamação">Reclamação</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Sua mensagem:</label>
                        <textarea class="form-control bg-dark text-white" id="mensagem" name="mensagem" rows="3" placeholder="Digite sua mensagem..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger btn-lg px-5">Enviar</button>
                </form>
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