<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //referencia de modelo-tabla
    protected $table = 'estados';

    //campos asignables
    protected $fillable = [
        'id', 'nombre'
    ];
}
