<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alu_nombre');
            $table->string('alu_apellido_paterno');
            $table->string('alu_apellido_materno');
            $table->string('alu_rut');
            $table->integer('run');
            $table->string('genero');
            $table->bigInteger('alu_celular');
            $table->string('alu_email',150);
            //$table->string('password');
            $table->tinyInteger('semestres_aprobados');
            $table->tinyInteger('semestre_actual');
            $table->string('direccion');
            $table->integer('id_comuna')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('id_carrera')->unsigned();
            $table->boolean('activo');
            $table->rememberToken();
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
        Schema::dropIfExists('exhibitors');
    }
}
