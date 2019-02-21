<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //referencia de modelo-tabla
    protected $table = 'servicios';

    //campos asignables
    protected $fillable = [
        'nombre'
    ];

    public function servicioEmpresas(){
        return $this->hasMany(ServicioEmpresa::class);
    }

    public function scopeNombre($query, $name)
    {
    	if (trim($name) != "")
    	{
    		$query->where('nombre', "LIKE", "%$name%");
    	}
    }
}
