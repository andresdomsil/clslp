<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    //referencia de modelo-tabla
    protected $table = 'certificacions';

    //campos asignables
    protected $fillable = [
        'nombre'
    ];

    public function certificacionEmpresas(){
        return $this->hasMany(CertificacionEmpresas::class);
    }
}
