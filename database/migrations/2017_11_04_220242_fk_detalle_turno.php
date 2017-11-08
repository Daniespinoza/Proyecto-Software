<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkDetalleTurno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('turndetails', function (Blueprint $table) {
          $table->foreign('id_turno')->references('id_turno')->on('turns');
          $table->foreign('id_expositor')->references('id_expositor')->on('exhibitors');
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
        Schema::table('turndetails', function (Blueprint $table) {
            //
        });
    }
}
