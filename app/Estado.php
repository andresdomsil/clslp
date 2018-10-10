<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //referencia de modelo-tabla
    protected $table = 'estados';

    //campos asignables
    protected $fillable = [
        'nombre'
    ];

    public function sucursales(){
        return $this->hasMany(Sucursal::class);
    }

    public function rutas(){
        return $this->hasMany(Ruta::class);
    }
}
