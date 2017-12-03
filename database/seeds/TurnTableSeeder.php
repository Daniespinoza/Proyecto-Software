<?php

use Illuminate\Database\Seeder;
use App\Turn;
class TurnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $turno = new Turn();
          $turno->id_jornada = 3;
          $turno->id_evento = 1;
          $turno -> save();

          $turno1 = new Turn();
          $turno1->id_jornada = 1;
          $turno1->id_evento = 2;
          $turno1 -> save();

    }
}
