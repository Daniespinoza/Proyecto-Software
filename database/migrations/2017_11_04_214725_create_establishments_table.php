<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rbd');
            $table->string('nombre_establecimiento',60);
            $table->integer('id_comuna')->unsigned();
            $table->string('direccion',60);
            $table->integer('id_depto')->unsigned();
            $table->integer('id_tipo_establecimiento')->unsigned();
            $table->string('encargado',80);
            $table->integer('id_cargo')->unsigned();
            $table->string('correo',50);
            $table->integer('telefono');
            $table->string('pace',50);
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
        Schema::dropIfExists('establishments');
    }
}
