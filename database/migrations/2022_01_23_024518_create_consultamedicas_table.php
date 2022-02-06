<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultamedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultamedicas', function (Blueprint $table) {
            $table->id();
            $table->integer('numCita');
            $table->date('fecha');
            $table->time('hora');
            $table->text('molestiasPrevias');
            //$table->unsignedBigInteger('secretaria_id');
            //$table->foreign('secretaria_id')->references('id')->on('secretarias');
           $table->unsignedBigInteger('medico_id');
           // $table->foreign('medico_id')->references('id')->on('medicos');
            $table->unsignedBigInteger('creadopor');
            $table->unsignedBigInteger('receta_id');
            $table->foreign('receta_id')->references('id')->on('recetamedicas');
            $table->unsignedBigInteger('cita_id');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('cita_id')->references('id')->on('citamedicas');
            $table->timestamps();
           // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultamedicas');
    }
}
