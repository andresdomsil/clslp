<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //referencia de modelo-tabla
    protected $table = 'servicios';

    //campos asignables
    protected $fillable = [
        'id', 'nombre'
    ];
}
