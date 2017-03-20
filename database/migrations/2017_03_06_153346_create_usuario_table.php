<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {        
            $table->increments('idusuario');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('dui');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('usuario');
            $table->string('password');
            $table->integer('estado');
            $table->integer('idcargo')->unsigned();
            $table->foreign('idcargo')->references('idcargo')->on('cargo');
            $table->rememberToken();
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
        Schema::drop('usuario');
    }
}
