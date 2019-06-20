<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Actividad;
use App\Certificacion;
use App\Estado;
use App\Mercancia;
use App\Equipo;
use App\Servicio;

use App\ActividadEmpresa;
use App\CertificacionEmpresa;
use App\Ruta;
use App\MercanciaEmpresa;
use App\EquipoEmpresa;

use DB;

class EmpresasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empresas = Empresa::nombre($request->get('search'))->paginate(20);
        return view('empresas.index',compact('empresas'));
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

        $logo = $request->file('myfile')->store('public');

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
            'logo' => $logo,
            'prioridad' => $prio));

            $Empresa -> save();
            return redirect('newempresa')->with('status', 'Se agrego correctamente la empresa.');;

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
        $actividades = Actividad::all();
        return view('empresas.show', compact('empresa', 'actividades'));
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

        $actividades = Actividad::orderBy('nombre')->get();
        $certificaciones = Certificacion::orderBy('nombre')->get();
        $estados = Estado::orderBy('nombre')->get();
        $equipos = Equipo::orderBy('nombre')->get();
        $mercancias = Mercancia::orderBy('nombre')->get();
        $servicios = Servicio::orderBy('nombre')->get();

        $empxact = \DB::select('SELECT ae.id, a.nombre FROM actividad_empresas ae inner join actividades a on a.id = ae.tipos_actividad_id where ae.empresas_id = ?', [$id]);
        $empxcer = \DB::select('SELECT ce.id, c.nombre FROM certificacion_empresas ce inner join certificaciones c on c.id = ce.certificaciones_id where ce.empresas_id = ?', [$id]);
        $rutas = \DB::select('SELECT rutas.id, estados.nombre FROM rutas inner join estados on estados.id = rutas.estados_id where rutas.empresa_id = ?', [$id]);
        $empxequ = \DB::select('SELECT ee.id, equipos.nombre FROM equipo_empresas ee inner join equipos on equipos.id = ee.tipo_equipos_id where ee.empresa_id = ?', [$id]);
        $empxmer = \DB::select('SELECT me.id, mercancias.nombre FROM mercancia_empresas me inner join mercancias on mercancias.id = me.tipo_mercancias_id where me.empresas_id = ?', [$id]);
        $empxser = \DB::select('SELECT se.id, servicios.nombre FROM servicio_empresas se inner join servicios on servicios.id = se.servicios_id where se.empresas_id = ?', [$id]);

        return view('empresas.edit',compact('empresa', 'actividades', 'certificaciones', 'estados', 'equipos', 'mercancias', 'servicios', 'empxact', 'empxcer', 'rutas', 'empxequ', 'empxmer', 'empxser'));
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

        if ($request->hasFile('myFile'))
        {
            $empresa -> logo = $request->file('myfile')->store('public');;
        }

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
        $empresa -> prioridad = $prio;

        $empresa -> save();

        //dd($request->get('actividadempresa'));
        $actividadempresa = new ActividadEmpresa();
        $actividadempresa -> empresas_id = $id;
        $actividadempresa -> tipos_actividad_id = $request->get('actividadempresa');
        $actividadempresa -> save();

        $certificacionempresa = new CertificacionEmpresa();
        $certificacionempresa -> empresas_id = $id;
        $certificacionempresa -> certificaciones_id = $request->get('certificacionempresa');
        $certificacionempresa -> save();

        $ruta = new Ruta();
        $ruta -> estados_id = $request->get('rutas');
        $ruta -> empresa_id = $id;
        $ruta -> save();

        $equipoempresa = new EquipoEmpresa();
        $equipoempresa -> tipo_equipos_id = $request->get('equipos');
        $equipoempresa -> empresa_id = $id;
        $equipoempresa -> save();

        $mercanciaempresa = new MercanciaEmpresa();
        $mercanciaempresa -> tipo_mercancias_id = $request->get('equipos');
        $mercanciaempresa -> empresas_id = $id;
        $mercanciaempresa -> save();
        //dd($request->file('myfile')->store('public'));
        return redirect(action('EmpresasController@edit', $empresa->id))->with('status', 'La empresa actualizada correctamente.');
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
       $nombre = $empresa -> nombre;
       $empresa->delete();

       return redirect('listaempresas')->with('status', 'La empresa '.$nombre. " ha sido eliminada correctamente.");;
    }
}
