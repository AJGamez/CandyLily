<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo', function (Blueprint $table) {        
            $table->increments('idcargo');
            $table->string('nombre');
            $table->integer('estado');
            $table->boolean('modusuario');
            $table->boolean('verusuario');
            $table->boolean('modcargo');           
            $table->boolean('vercargo');
            $table->boolean('modcitas');
            $table->boolean('vercitas');
            $table->boolean('modpaciente');
            $table->boolean('verpaciente');
            $table->boolean('verhistorial');
            $table->boolean('modreceta');
            $table->boolean('verreceta');
            $table->boolean('modunidad');
            $table->boolean('verunidad');
            $table->boolean('modconsulta');
            $table->boolean('verconsulta');
            $table->boolean('moddiagnostico');
            $table->boolean('verdiagnostico');
            $table->boolean('modtratamiento');
            $table->boolean('vertratamiento');
            $table->boolean('verbitacora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargo');
    }
}
