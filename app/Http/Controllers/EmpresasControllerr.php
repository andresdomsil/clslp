<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresasControllerr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.empresas_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $mex =  $request->get('immex') == 'on'?true:false;
        $mp = $request->get('mp')=='on'?true:false;
        $rh =  $request->get('rh')=='on'?true:false;
        $rs = $request->get('rassat')=='on'?true:false;
        $prio = $request->get('prio')=='on'?true:false;


        $Empresa = new Empresa($arrayName = array(
            'nombre' => $request->get('name'),
            'direccion'  => $request->get('ad'),
            'nombre_contacto' => $request->get('name_c'),
            'telefono'  => $request->get('phone'),
            'email'  => $request->get('emailad'),
            'web' => $request->get('web'),
            'cantidad_unidades' => $request->get('values'),
            'antiguedad_unidades' => $request->get('oldvalues'),
            'programa_immex' => $mex,
            'material_peligros' => $mp,
            'servicios_adicionales' => $request->get('servadi'),
            'recursos_humano' => $rh,
            'rastreo_satelital' => $rs,
            'rutas_internacionales' => $request->get('rutinter'),
            'logo' => $request->get('myfile'),
            'prioridad' => $prio));
        
            $Empresa -> save();
            return redirect('/');

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
        return view('empresas.show',compact('empresa'));
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
    }
}
