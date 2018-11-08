<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStdCodificasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stdCodificas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEstudiante')->unsigned();
            $table->integer('numeroProyecto')->unsigned();
            $table->longText('contenido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_codificas');
    }
}
