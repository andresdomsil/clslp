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

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function certificacion(){
        return $this->belongsTo(Certificacion::class);
    }
}
