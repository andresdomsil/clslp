<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actividades = Actividad::nombre($request->get('search'))->paginate(15);
        return view('actividades.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('actividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $actividades = new Actividad($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $actividades->save();

        return redirect('Actividades')->with('status', 'Se agrego correctamente la actividad.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividades = Actividad::find($id);
        return view('actividades.show', compact('actividades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividades = Actividad::find($id);
        return view('actividades.edit', compact('actividades'));
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
        $actividades = Actividad::find($id);
        $actividades->nombre = $request->get('nombre');
        $actividades->save();

        return redirect(action('ActividadesController@edit', $actividades->id))->with('status', 'La actividad con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividades = Actividad::find($id);
        $nombre = $actividades->nombre;
        $actividades->delete();

        return redirect('listactividades')->with('status', 'La actividad con descripción '.$nombre. " ha sido eliminado.");
    }
}
