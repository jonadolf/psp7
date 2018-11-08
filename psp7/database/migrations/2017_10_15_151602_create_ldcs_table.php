<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Iatstuti\Database\Support\NullableFields;

class CreateLdcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ldcs', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('idProyecto')->unsigned();
            $table->integer('idUsuario')->unsigned();
            
            $table->integer('PlanBase')-> nullable ();
            $table->integer('PlanEliminado')-> nullable ();
            $table->integer('planModificado')-> nullable ();
            $table->integer('planAdicionado')-> nullable ();
            $table->integer('planReusado')-> nullable ();
            $table->integer('planNyC')-> nullable ();
            $table->integer('planTotal')-> nullable ();

            $table->integer('actualBase')-> nullable ();
            $table->integer('actualEliminado')-> nullable ();
            $table->integer('actualModificado')-> nullable ();
            $table->integer('actualAdicionado')-> nullable ();
            $table->integer('actualReusado')-> nullable ();
            $table->integer('actualNyC')-> nullable ();
            $table->integer('actualTotal')-> nullable ();

            $table->integer('fechaBase')-> nullable ();
            $table->integer('fechaEliminado')-> nullable ();
            $table->integer('fechaModificado')-> nullable ();
            $table->integer('fechaAdicionado')-> nullable ();
            $table->integer('fechaReusado')-> nullable ();
            $table->integer('fechaNyC')-> nullable ();
            $table->integer('fechaTotal')-> nullable ();


            $table->integer('avgFechaBase')-> nullable ();
            $table->integer('avgFechaEliminado')-> nullable ();
            $table->integer('avgFechaModificado')-> nullable ();
            $table->integer('avgFechaAdicionado')-> nullable ();
            $table->integer('avgFechaReusado')-> nullable ();
            $table->integer('avgFechaNyC')-> nullable ();
            $table->integer('avgFechaTotal')-> nullable ();
            $table->foreign('idProyecto')->references('id')->on('Proyectos')->onDelete('cascade');
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ldcs');
    }
}
