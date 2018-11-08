<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('idEstudiante')->unsigned();
            $table->integer('numeroProyecto')->unsigned();
            $table->char('estado',20);
            $table->foreign('idEstudiante')->references('id')->on('users')->onUpdate('cascade');
           
                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignas');
    }
}
