<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioEmpresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'servicio_empresas';

    //campos asignables
    protected $fillable = [
        'tipo_servicios_id', 'empresas_id'
    ];
}
