<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //referencia de modelo-tabla
    protected $table = 'actividades';

    //campos asignables
    protected $fillable = [
        'nombre'
    ];

    public function actividadEmpresas(){
        return $this->hasMany(ActividadEmpresas::class);
    }
}
