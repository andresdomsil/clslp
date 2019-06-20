<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ActividadEmpresa;

class ActividadEmpresaController extends Controller
{
    //

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //dd($id);
       $empresa = ActividadEmpresa::find($id);
       $empresa->delete();

       return redirect('listaempresas')->with('status', 'La empresa ha sido actualizada correctamente.');
    }
}
