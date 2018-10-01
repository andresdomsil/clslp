<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //referencia de modelo-tabla
    protected $table = 'actividads';

    //campos asignables
    protected $fillable = [
        'id', 'nombre'
    ];

}
