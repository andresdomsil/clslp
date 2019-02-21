<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursal = Sucursal::all();
        return view('sucursal.index', compact('sucursal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = new sucursal($arrayName = array(
            'nombre' => $request->get('nombre')
        ));

        $sucursal->save();

        return redirect('sucursal')->with('status', 'Se agrego correctamente la sucursal.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = sucursal::find($id);
        return view('sucursal.show', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sucursal = sucursal::find($id);
        return view('sucursal.edit', compact('sucursal'));
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
        $sucursal = sucursal::find($id);
        $sucursal->nombre = $request->get('nombre');
        $sucursal->save();

        return redirect(action('SucursalController@edit', $servicio->id))->with('status', 'La sucursal con Id '.$id.' actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal = sucursal::find($id);
        $sucursal = $sucursal->nombre;
        $sucursal->delete();

        return redirect('listsucursal')->with('status', 'La sucursal con descripci&oacute;n '.$nombre. " ha sido eliminado.");
    }
}
