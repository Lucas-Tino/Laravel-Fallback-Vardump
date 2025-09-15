<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class DepartamentosController extends Controller
    {
        public static function departamentos() {
            return view('site.departamentos');
        }
    }
    
?>