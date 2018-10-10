<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //referencia de modelo-tabla
    protected $table = 'equipos';

    //campos asignables
    protected $fillable = [
        'nombre'
    ];

    public function equipoEmpresas(){
        return $this->hasMany(EquipoEmpresa::class);
    }
}
