<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {        
            $table->increments('id');            
            $table->string('nexpediente');
            //$table->foreign('nexpediente')->references('id')->on('expediente');
            $table->date('fconsulta');
            $table->integer('procedencia')->unsigned();
            $table->foreign('procedencia')->references('idunidad')->on('unidad');
            $table->integer('si');
            $table->integer('no');
            $table->integer('pv');
            $table->integer('ss');
            $table->date('fim');
            $table->date('fio');
            $table->integer('vf1');
            $table->integer('vf2');
            $table->string('amenorrea');            
            $table->integer('av1');
            $table->integer('av2');
            $table->integer('at1');            
            $table->integer('at2');            
            $table->integer('diagnostico')->unsigned();
            $table->foreign('diagnostico')->references('id')->on('diagnostico');
            $table->integer('tratamiento')->unsigned();
            $table->foreign('tratamiento')->references('id')->on('tratamiento');
            $table->integer('ebase')->unsigned();
            $table->foreign('ebase')->references('id')->on('enfermedad');                        
            $table->string('observaciones'); //Esto yo se lo puse, por cualquier observación que sea necesaria
            $table->integer('idmedi');
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
        //
    }
}
