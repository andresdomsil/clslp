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

    public function scopeNombre($query, $name)
    {
    	if (trim($name) != "")
    	{
    		$query->where('nombre', "LIKE", "%$name%");
    	}
    }
    
    public function actividadEmpresas(){
        return $this->hasMany(ActividadEmpresas::class);
    }
}
