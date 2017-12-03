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
<<<<<<< HEAD
      $evento->direccion= 'Irarrázabal 5310' ;
=======
      $evento->direccion = 'Av. Maipú #456';
>>>>>>> 6168a40c347aa97df55c9f08a8061d14c3ab1f70
      $evento->cupos=4;
      $evento->fecha_inicio = '2017-11-10' ;
      $evento -> save();

      $evento1 = new Event();
      $evento1->id_tipo_evento = 6;
      $evento1->id_personal = 2;
      $evento1->id_establecimiento = 2 ;
<<<<<<< HEAD
      $evento1->direccion= 'Utem Campus Macul' ;
=======
      $evento1->direccion = 'Av. Matta #5603';
>>>>>>> 6168a40c347aa97df55c9f08a8061d14c3ab1f70
      $evento1->cupos=4;
      $evento1->fecha_inicio = '2017-11-15' ;
      $evento1 -> save();
    }
}
