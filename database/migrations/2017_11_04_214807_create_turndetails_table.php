<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurndetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turndetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_turno')->unsigned();
            $table->integer('id_expositor')->unsigned();
            $table->boolean('confirmacion');
            $table->boolean('asistencia');
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
        Schema::dropIfExists('turndetails');
    }
}
