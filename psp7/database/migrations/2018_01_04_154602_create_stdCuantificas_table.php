<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStdCuantificasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stdCuantificas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEstudiante');
            $table->integer('numeroProyecto');
            $table->string('lenguaje');
            $table->string('tipoConteo');
            $table->string('ejecutables');
            $table->string('declaraciones');
            $table->string('dCompilador');
            $table->string('comentarios');
            $table->string('lineasBlanco');
            $table->string('delimitadores');
            $table->text('comentariosAd');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stdCuantificas');
    }
}
