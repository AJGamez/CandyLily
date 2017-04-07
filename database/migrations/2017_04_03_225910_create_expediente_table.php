<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nexpediente');
            $table->string('cecosf');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('alias');
            $table->date('fnac');
            $table->integer('sexo');
            $table->integer('efamiliar');
            $table->string('municipionac');
            $table->string('departamentonac');
            $table->string('paisnac');
            $table->string('nacionalidad');
            $table->string('documentoidentidad');
            $table->string('ndocidenti');
            $table->string('telefonopac');
            $table->string('ocupacion');
            $table->string('direccion');
            $table->string('departamentodire');
            $table->string('municipiodire');
            $table->integer('canton');
            $table->integer('ageografica');
            $table->integer('asegurado');
            $table->string('areacotiza');
            $table->string('nafiliacion');
            $table->string('ltrabajo');
            $table->string('telefonotra');
            $table->string('npadre');
            $table->string('nmadre');
            $table->string('nconyuge');
            $table->string('parentescoresponsable');
            $table->string('nresponsable');
            $table->string('docidentires');
            $table->string('ndocidentires');
            $table->string('direccionres');
            $table->string('telefonores');
            $table->string('parentescopdatos');
            $table->string('nombrepdatos');
            $table->string('docidentidadpdatos');
            $table->string('ndocpdatos');
            $table->string('observaciones');
            $table->integer('estado');
            $table->string('idtinfo');
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
        Schema::drop('expediente');
    }
}
