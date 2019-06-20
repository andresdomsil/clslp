<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MercanciaEmpresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'mercancia_empresas';

    //campos asignables
    protected $fillable = [
        'tipo_mercancias_id', 'empresas_id'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }

    public function mercancia(){
        return $this->belongsTo(Mercancia::class);
    }
}
