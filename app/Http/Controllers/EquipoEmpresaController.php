<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EquipoEmpresa;

class EquipoEmpresaController extends Controller
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
       $empresa = EquipoEmpresa::find($id);
       $empresa->delete();
       
       return redirect('listaempresas')->with('status', 'La empresa ha sido actualizada correctamente.');
    }
}
