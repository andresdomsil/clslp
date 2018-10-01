<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadEmpresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'actividad_empresas';

    //campos asignables
    protected $fillable = [
        'tipos_actividad_id', 'empresas_id'
    ];
}
