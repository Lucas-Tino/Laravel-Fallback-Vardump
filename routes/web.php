<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('Bem-Vindo a Etec Zona Leste');
});

Route::get('/', function(){ return PrincipalController::principal();})->name('site.index');
Route::get('/cursos', function(){ return CursosController::cursos();})->name('site.cursos');
Route::get('/departamentos', function(){ return DepartamentosController::departamentos();})->name('site.departamentos');
Route::get('/contato', function(){ return ContatoController::contato();})->name('site.contato');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function() {
    echo '
        <html>
            <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                <link rel="stylesheet" type="text/css" href="../css/app.css" media="screen" />
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            </head>

            <body class="bg-dark">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-center mx-auto my-auto">
                        <h1 class="fw-bold text-white mb-3">404</h1>
                        <h2 class="fw-semibold text-white mb-3"">Página não encontrada</h2>
                        <p class="text-white mb-5">
                            A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial
                        </p>
                    </div>
                </div>
            </body>
        </html>
    
    ';
});

require __DIR__.'/auth.php';
