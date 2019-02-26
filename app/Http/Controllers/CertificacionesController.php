<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificaciones;

class CertificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$servicios = Servicio::all();
        $certificacion = certificacion::nombre($request->get('search'))->paginate(15);
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
        $certificion = new certificacion($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $certificacion->save();

        return redirect('certificaciones')->with('status', 'Se agrego correctamente la certificacion.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificacion = certificacion::find($id);
        return view('certificaciones.show', compact('certificaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificacion = certificacion::find($id);
        return view('certificaciones.edit', compact('certificaciones'));
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
        $certificacion = certificacion::find($id);
        $certificacion->nombre = $request->get('nombre');
        $certificacion->save();

        return redirect(action('CertificacionesController@edit', $certificacion->id))->with('status', 'La certificacion con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificacion = certificacion::find($id);
        $nombre = $certificacion->nombre;
        $certificacion->delete();

        return redirect('listcertificacion')->with('status', 'la certificacion con descripci&oacute;n '.$nombre. " ha sido eliminado.");
    }
}
