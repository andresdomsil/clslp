<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mercancia;

class MercanciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$mercancias = Mercancia::all();
        $mercancias = Mercancia::nombre($request->get('search'))->paginate(15);
        return view('mercancias.index', compact('mercancias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mercancias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Mercancia = new Mercancia($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $Mercancia->save();

        return redirect('mercancias')->with('status', 'Se agrego correctamente la Mercancia.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mercancia = Mercancia::find($id);
        return view('mercancias.show', compact('mercancia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mercancia = Mercancia::find($id);
        return view('mercancias.edit', compact('mercancia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mercancia = Mercancia::find($id);
        $mercancia->nombre = $request->get('nombre');
        $mercancia->save();

        return redirect(action('MercanciasController@edit', $mercancia->id))->with('status', 'La Mercancia con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mercancia = Mercancia::find($id);
        $nombre = $mercancia->nombre;
        $mercancia->delete();

        return redirect('listmercancias')->with('status', 'El mercancia con descripci&oacute;n '.$nombre. " ha sido eliminado.");
    }
}
