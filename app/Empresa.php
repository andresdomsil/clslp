<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    
    //campos asignables
    protected $fillable = [
        'id','nombre', 'direccion', 'nombre_contacto', 'telefono', 'email',
        'web', 'cantidad_unidades', 'antiguedad_unidades', 'programa_immex',
        'material_peligros', 'servicios_adicionales', 'recursos_humano',
        'rastreo_satelital', 'rutas_internacionales', 'logo', 'prioridad'
    ];

    public function sucursales(){
        return $this->hasMany(Sucursal::class);
    }

    public function servicioEmpresas(){
        return $this->hasMany(ServicioEmpresa::class);
    }

    public function rutas(){
        return $this->hasMany(Ruta::class);
    }

    public function mercanciaEmpresas(){
        return $this->hasMany(MercanciaEmpresas::class);
    }

    public function equipoEmpresas(){
        return $this->hasMany(EquipoEmpresa::class);
    }

    public function certificacionEmpresas(){
        return $this->hasMany(CertificacionEmpresas::class);
    }

    public function actividadEmpresas(){
        return $this->hasMany(ActividadEmpresa::class);
    }
}
