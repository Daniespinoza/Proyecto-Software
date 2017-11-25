<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkPersonal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('staff', function (Blueprint $table) {
          $table->foreign('id_user')->references('id')->on('users');
          $table->foreign('id_rol')->references('id')->on('roles');
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
        Schema::table('staff', function (Blueprint $table) {
            //
        });
    }
}
