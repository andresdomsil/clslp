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

    public function mercanciaEmpresas(){
        return $this->hasMany(MercanciaEmpresas::class);
    }
}
