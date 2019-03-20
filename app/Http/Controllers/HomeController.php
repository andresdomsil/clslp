<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $empresas = Empresa::nombre($request->get('search'))->paginate(20);
        return view('welcome', compact('empresas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        return view('perfil', compact('empresa'));
    }
}