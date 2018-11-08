<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActualLdcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actualLdcs', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('idUsuario')->nullable();
            $table->integer('idproyecto')->nullable();
            $table->integer('actualBase')->nullable();
            $table->integer('actualEliminado')-> nullable ();
            $table->integer('actualModificado')-> nullable ();
            $table->integer('actualAdicionado')-> nullable ();
            $table->integer('actualReusado')-> nullable ();
            $table->integer('actualNyC')-> nullable ();
            $table->integer('actualTotal')-> nullable ();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actual_ldcs');
    }
}
