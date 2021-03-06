<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tipo_evento')->unsigned();
            $table->integer('id_personal')->unsigned();
            $table->integer('id_establecimiento')->unsigned();
            $table->string('direccion');
            $table->integer('cupos');
            $table->dateTime('start');
            $table->string('title');
            $table->boolean('ficha');
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
        Schema::dropIfExists('events');
    }
}
