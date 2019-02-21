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

    public function scopeNombre($query, $name)
    {
    	//dd("scope: " . $name);
    	if (trim($name) != "")
    	{
    		$query->where('nombre', "LIKE", "%$name%");
    		//dd($query);
    	}
    }
}
