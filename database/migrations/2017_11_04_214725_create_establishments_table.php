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
            $table->string('nombre_establecimiento');
            $table->integer('id_comuna')->unsigned();
            $table->string('direccion');
            $table->integer('id_depto')->unsigned();
            $table->integer('id_tipo_establecimiento')->unsigned();
            $table->string('encargado');
            $table->integer('id_cargo')->unsigned();
            $table->string('correo',150)->nullable();
            $table->bigInteger('telefono')->nullable();
            $table->string('pace')->nullable();
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
