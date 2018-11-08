<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamFavgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamFavgs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProyecto')->nullable();
            $table->integer('idUsuario')->nullable();
            $table->integer('fReusado')->nullable();
            $table->integer('fNyC')->nullable();
            $table->integer('fTotal')->nullable();
            $table->float('avgfReusado',8,2)->nullable();
            $table->float('avgfNyC',8,2)->nullable();
            $table->float('avgfTotal',8,2)->nullable();
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tam_favgs');
    }
}
