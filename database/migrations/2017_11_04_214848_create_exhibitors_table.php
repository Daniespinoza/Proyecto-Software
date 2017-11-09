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
            $table->increments('id_expositor');
            $table->string('alu_nombre',50);
            $table->string('alu_apellido_paterno',50);
            $table->string('alu_apellido_materno',50);
            $table->string('alu_rut',50);
            $table->integer('run');
            $table->integer('alu_celular');
            $table->string('alu_email',50);
            $table->string('password',50);
            $table->tinyInteger('semestres_aprobados');
            $table->tinyInteger('semestre_actual');
            $table->string('direccion',50);
            $table->integer('id_comuna')->unsigned();
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
