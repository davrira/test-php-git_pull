<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_vehiculos_externo', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_vehiculo_gps');
            $table->unsignedBigInteger('id_suscripcion');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('usr_cre');
            $table->unsignedBigInteger('usr_act'); 
            $table->integer('estatus');
            $table->string('fecha');

            $table->foreign('id_vehiculo_gps')->references('id')->on('vehiculo_gps');
            $table->foreign('id_suscripcion')->references('id')->on('suscripcion');
            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('usr_cre')->references('id')->on('usuario');
            $table->foreign('usr_act')->references('id')->on('usuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historico_vehiculos_externo');
    }
};
