<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipoEmpresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'equipo_empresas';

    //campos asignables
    protected $fillable = [
        'tipo_equipos_id', 'empresa_id'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}
