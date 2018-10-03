<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('empresas_id')->unsigned();
            $table->string('nombre', 255)->default(null);
            $table->string('direccion', 255)->default(null);
            $table->string('nombre_contacto', 45)->default(null);
            $table->integer('telefono')->unsigned();
            $table->string('email', 45)->default(null);
            $table->string('web', 45)->default(null);
            $table->integer('cantidad_unidades')->unsigned();
            $table->string('antiguedad_unidades', 45)->default(null);
            $table->boolean('programa_immex')->default(null);
            $table->boolean('material_peligros')->default(null);
            $table->string('servicios_adicionales', 255)->default(null);
            $table->boolean('recurso_humano')->default(null);
            $table->boolean('rastreo_satelital')->default(null);
            $table->string('rutas_internacionales', 255)->default(null);
            $table->string('logo', 45)->default(null);
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
