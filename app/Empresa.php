<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //referencia de modelo-tabla
    protected $table = 'empresas';

    //campos asignables
    protected $fillable = [
        'id', 'nombre', 'direccion', 'nombre_contacto', 'telefono', 'email',
        'web', 'cantidad_unidades', 'antiguedad_unidades', 'programa_immex',
        'material_peligrosos', 'servicios_adicionales', 'recurso_humano',
        'rastreo_satelital', 'rutas_internacionales', 'logo', 'prioridad'
    ];
}
