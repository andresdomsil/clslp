<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificacionEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificacion_empresas', function (Blueprint $table) {
            $table->increments('certificacionempresas_id')->unsigned();
            $table->integer('certificaciones_id')->unsigned();
            $table->integer('empresas_id')->unsigned();

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
        Schema::dropIfExists('certificacion_empresas');
    }
}
