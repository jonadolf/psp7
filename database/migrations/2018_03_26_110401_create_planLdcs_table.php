<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanLdcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planLdcs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->nullable();
            $table->integer('idproyecto')->nullable();
            $table->integer('planBase')->nullable();
            $table->integer('PlanEliminado')-> nullable ();
            $table->integer('planModificado')-> nullable ();
            $table->integer('planAdicionado')-> nullable ();
            $table->integer('planReusado')-> nullable ();
            $table->integer('planNyC')-> nullable ();
            $table->integer('planTotal')-> nullable ();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_ldcs');
    }
}
