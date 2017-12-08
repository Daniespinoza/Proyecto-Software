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
      $evento->direccion= 'Irarrázabal 5310' ;
      $evento->cupos=4;
      $evento->start = '2017-12-18 13:30' ;
      $evento->title='Feria Ñuñoa';
      $evento -> save();

      $evento1 = new Event();
      $evento1->id_tipo_evento = 6;
      $evento1->id_personal = 2;
      $evento1->id_establecimiento = 2 ;
      $evento1->direccion= 'UTEM Campus Macul' ;
      $evento1->cupos=4;
      $evento1->start = '2017-12-25 10:00' ;
      $evento1->title='Ensayo PSU Macul';
      $evento1 -> save();
    }
}
