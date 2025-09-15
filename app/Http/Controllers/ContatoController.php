<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ContatoController extends Controller
    {
        public static function contato() {
            echo "<p class='text-center text-white'>";
                var_dump($_GET); // vai mostrar na url os dados armazenandos no formulario
            echo "</p'>";
            return view('site.contato');
        }
    }
    
?>