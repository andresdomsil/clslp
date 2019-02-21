<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado = Estado::all();
        return view('estado.index', compact('estado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado = new estado($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $estado->save();

        return redirect('estado')->with('status', 'Se agrego correctamente el estados.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estado = estado::find($id);
        return view('estado.show', compact('estado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado = estado::find($id);
        return view('estado.edit', compact('estado'));
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
        $estado = estado::find($id);
        $estado->nombre = $request->get('nombre');
        $estado->save();

        return redirect(action('EstadoController@edit', $estado->id))->with('status', 'El estado con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado = estado::find($id);
        $estado = $estado->nombre;
        $estado->delete();

        return redirect('listsestado')->with('status', 'El estado con descripci&oacute;n '.$nombre. " ha sido eliminado.");
    }
}
