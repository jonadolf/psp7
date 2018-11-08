<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table ->integer('NumeroProyecto');
            $table->char('NombreProyecto',40);
            $table->char('NombreArchivo',40);
            $table->char('RutaArchivo',50);
            $table->longText('ElementosDeEvaluacion');
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Proyectos');
    }
}
