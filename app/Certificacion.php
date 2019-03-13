<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    //referencia de modelo-tabla
    protected $table = 'certificaciones';

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

    public function certificacionEmpresas(){
        return $this->hasMany(CertificacionEmpresas::class);
    }
}
