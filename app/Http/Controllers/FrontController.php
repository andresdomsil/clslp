<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function pagina()
    {
        return view('pagina');
    }

    public function ayuda()
    {
        return view('ayuda');
    }

    public function app()
    {
        return view('app');
    }
}
