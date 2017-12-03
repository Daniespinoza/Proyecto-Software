<?php

use Illuminate\Database\Seeder;
use App\Turndetail;
class TurndetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $turndet = new Turndetail();
      $turndet->id_turno = 1;
      $turndet->id_expositor = 1;
      $turndet->confirmacion = 1 ;
      $turndet->asistencia=1;
      $turndet -> save();

      $turndet1 = new Turndetail();
      $turndet1->id_turno = 2;
      $turndet1->id_expositor = 1;
      $turndet1->confirmacion = 1 ;
      $turndet1->asistencia=1;
      $turndet1 -> save();
    }
}
