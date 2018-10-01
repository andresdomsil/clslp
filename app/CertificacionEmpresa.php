<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificacionEmpresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'certificacion_empresas';

    //campos asignables
    protected $fillable = [
        'certificaciones_id', 'empresas_id'
    ];
}
