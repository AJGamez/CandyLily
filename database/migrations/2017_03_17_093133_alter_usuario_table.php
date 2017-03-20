<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */    

    public function up()
    {
        Schema::table('usuario', function (Blueprint $table) {
            
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario', function (Blueprint $table) {

        });
    }
}
