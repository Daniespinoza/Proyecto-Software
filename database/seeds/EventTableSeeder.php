<?php

use Illuminate\Database\Seeder;
use App\Event;
class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $evento = new Event();
      $evento->id_tipo_evento = 1;
      $evento->id_personal = 2;
      $evento->id_establecimiento = 1 ;
      $evento->cupos=4;
      $evento->fecha_inicio = '2017-11-10' ;
      $evento -> save();

      $evento1 = new Event();
      $evento1->id_tipo_evento = 3;
      $evento1->id_personal = 2;
      $evento1->id_establecimiento = 2 ;
      $evento1->cupos=4;
      $evento1->fecha_inicio = '2017-11-15' ;
      $evento1 -> save();
    }
}
