<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioEmpresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'servicio_empresas';

    //campos asignables
    protected $fillable = [
        'servicios_id', 'empresas_id'
    ];

    public function servicio(){
        return $this->belongsTo(Servicio::class);
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}
