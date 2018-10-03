<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMercanciaEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancia_empresas', function (Blueprint $table) {
            $table->increments('mercanciaempresas_id')->unsigned();
            $table->integer('tipo_mercancias_id')->unsigned();
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
        Schema::dropIfExists('mercancia_empresas');
    }
}
