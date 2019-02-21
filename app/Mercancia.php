<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    //referencia de modelo-tabla
    protected $table = 'mercancias';

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
}
