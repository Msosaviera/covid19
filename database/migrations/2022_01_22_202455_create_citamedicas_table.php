<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitamedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citamedicas', function (Blueprint $table) {
            $table->id();
            $table->date('fechaCita');
            $table->time('horaCita');
            $table->text('molestiasPrevias');
            $table->unsignedBigInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            //$table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            //$table->foreign('medico_id')->references('id')->on('medicos');
            $table->unsignedBigInteger('creadopor');
            //$table->foreign('secretaria_id')->references('id')->on('secretarias');
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citamedicas');
    }
}
