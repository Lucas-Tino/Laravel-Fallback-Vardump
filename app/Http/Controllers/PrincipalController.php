<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class PrincipalController extends Controller
    {
        public static function principal() {
            return view('site.principal');
        }
    }
    
?>