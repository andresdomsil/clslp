<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\EquiposFormRequest;
use App\Equipo;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->get('search'));
        $equipos = Equipo::nombre($request->get('search'))->paginate(15);
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->all();

        $equipo = new Equipo($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $equipo->save();

        return redirect('equipos')->with('status', 'Se agrego correctamente el Equipo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $equipo = Equipo::find($id);
        return view('equipos.show', compact('equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $equipo = Equipo::find($id);
        return view('equipos.edit', compact('equipo'));
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
        //
        $equipo = Equipo::find($id);
        $equipo->nombre = $request->get('nombre');
        $equipo->save();

        return redirect(action('EquiposController@edit', $equipo->id))->with('status', 'Equipo con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $equipo = Equipo::find($id);
        $nombre = $equipo->nombre;
        $equipo->delete();

        return redirect('listequipos')->with('status', 'El equipo con descripci&oacute;n '.$nombre. " ha sido eliminado.");

    }
}
