<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkEstablecimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('establishments', function (Blueprint $table) {
          $table->foreign('id_comuna')->references('id_comuna')->on('communes');
          $table->foreign('id_depto')->references('id_depto')->on('departaments');
          $table->foreign('id_tipo_establecimiento')->references('id_tipo_establecimiento')->on('establishmenttypes');
          $table->foreign('id_cargo')->references('id_cargo')->on('establishmentcharges');
          $table->unique('rbd');
          $table->unique('correo');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establishments', function (Blueprint $table) {
            //
        });
    }
}
