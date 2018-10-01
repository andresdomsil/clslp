<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //referencia de modelo-tabla
    protected $table = 'sucursals';

    //campos asignables
    protected $fillable = [
        'empresa_id', 'estados_id'
    ];
}
