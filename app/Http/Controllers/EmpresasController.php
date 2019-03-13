<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('admin.dashboard',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
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
        $empresa = Empresa::find($id);
        return view('empresas.edit',compact('empresa'));
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
        $empresa = Empresa::find($id);

        $mex =  $request->get('immex') == 'on'?true:false;
        $mp = $request->get('mp')=='on'?true:false;
        $rh =  $request->get('rh')=='on'?true:false;
        $rs = $request->get('rassat')=='on'?true:false;
        $prio = $request->get('prio')=='on'?true:false;


            $empresa -> nombre = $request->get('name');
            $empresa -> direccion = $request->get('ad');
            $empresa -> nombre_contacto = $request->get('name_c');
            $empresa -> telefono  = $request->get('phone');
            $empresa -> email  = $request->get('emailad');
            $empresa -> web = $request->get('web');
            $empresa -> cantidad_unidades = $request->get('values');
            $empresa -> antiguedad_unidades = $request->get('oldvalues');
            $empresa -> programa_immex = $mex;
            $empresa -> material_peligros = $mp;
            $empresa -> servicios_adicionales = $request->get('servadi');
            $empresa -> recursos_humano = $rh;
            $empresa -> rastreo_satelital = $rs;
            $empresa -> rutas_internacionales = $request->get('rutinter');
            $empresa -> logo = $request->get('myfile');
            $empresa -> prioridad = $prio;
        
            $empresa -> save();
            return redirect('/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $empresa = Empresa::find($id);
       $empresa->delete();
       
       return redirect('/');
    }
}
