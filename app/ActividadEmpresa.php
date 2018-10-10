<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadEmpresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'actividad_empresas';

    //campos asignables
    protected $fillable = [
        'actividad_id', 'empresas_id'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function actividad(){
        return $this->belongsTo(Actividad::class);
    }
}
