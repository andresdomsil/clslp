<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificacion;

class CertificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $certificaciones = Certificacion::nombre($request->get('search'))->paginate(15);
        return view('certificaciones.index', compact('certificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificacion = new Certificacion($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $certificacion->save();

        return redirect('certificaciones')->with('status', 'Se agrego correctamente la certificación.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificacion = Certificacion::find($id);
        return view('certificaciones.show', compact('certificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificacion = Certificacion::find($id);
        return view('certificaciones.edit', compact('certificacion'));
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
        $Certificacion = Certificacion::find($id);
        $Certificacion->nombre = $request->get('nombre');
        $Certificacion->save();

        return redirect(action('CertificacionesController@edit', $Certificacion->id))->with('status', 'La certificación con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Certificacion = Certificacion::find($id);
        $nombre = $Certificacion->nombre;
        $Certificacion->delete();

        return redirect('listcertificaciones')->with('status', 'La Certificación con descripción '.$nombre. " ha sido eliminado.");
    }
}
