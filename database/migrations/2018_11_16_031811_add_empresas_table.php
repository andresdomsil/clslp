<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {


            $table->increments('id');

            $table->string('nombre');
            $table->string('direccion');
            $table->string('nombre_contacto');
            $table->integer('telefono');
            $table->string('email');
            $table->string('web');
            $table->integer('cantidad_unidades');
            $table->string('antiguedad_unidades');
            $table->boolean('programa_immex');
            $table->boolean('material_peligros');
            $table->string('servicios_adicionales');
            $table->boolean('recursos_humano');
            $table->boolean('rastreo_satelital');
            $table->string('rutas_internacionales');
            $table->string('logo');
            $table->boolean('prioridad')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
