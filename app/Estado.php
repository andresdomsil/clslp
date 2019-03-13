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

    public function scopeNombre($query, $name)
    {
        if (trim($name) != "")
        {
            $query->where('nombre', "LIKE", "%$name%");
        }
    }

    public function sucursales(){
        return $this->hasMany(Sucursal::class);
    }

    public function rutas(){
        return $this->hasMany(Ruta::class);
    }
}
