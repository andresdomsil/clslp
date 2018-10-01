<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    //referencia de modelo-tabla
    protected $table = 'rutas';

    //campos asignables
    protected $fillable = [
        'empresa_id', 'estados_id'
    ];
}
