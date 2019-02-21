<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruta;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruta = ruta::all();
        return view('ruta.index', compact('ruta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruta = new ruta($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $ruta->save();

        return redirect('ruta')->with('status', 'Se agrego correctamente la ruta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruta = ruta::find($id);
        return view('ruta.show', compact('ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruta = ruta::find($id);
        return view('ruta.edit', compact('ruta'));
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
        $ruta = ruta::find($id);
        $ruta->nombre = $request->get('nombre');
        $ruta->save();

        return redirect(action('rutaController@edit', $ruta->id))->with('status', 'La ruta con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruta = ruta::find($id);
        $nombre = $ruta->nombre;
        $ruta->delete();

        return redirect('listruta')->with('status', 'La ruta con descripci&oacute;n '.$nombre. " ha sido eliminado.");
    }
}
