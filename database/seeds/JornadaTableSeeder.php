<?php

use Illuminate\Database\Seeder;
use App\Jornada;

class JornadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $jornada = new Jornada();
    $jornada->descripcion = 'Lunes a viernes 1 a 5 horas';
    $jornada->valor = '10000';
    $jornada->activo = 1 ;
    $jornada->tipo = 1 ;
    $jornada -> save();

    $jornada1 = new Jornada();
    $jornada1->descripcion = 'Lunes a viernes 5 a 10 horas';
    $jornada1->valor = '20000';
    $jornada1->activo = 1 ;
    $jornada1->tipo = 2 ;
    $jornada1 -> save();

    $jornada2 = new Jornada();
    $jornada2->descripcion = 'Lunes a viernes 2 a 4 horas después de las 18:00 ';
    $jornada2->valor = '20000';
    $jornada2->activo = 1 ;
    $jornada2->tipo = 3 ;
    $jornada2 -> save();

    $jornada3 = new Jornada();
    $jornada3->descripcion = 'Sabado de 1 a 5 horas';
    $jornada3->valor = '15000';
    $jornada3->activo = 1 ;
    $jornada3->tipo = 1 ;
    $jornada3 -> save();

    $jornada4 = new Jornada();
    $jornada4->descripcion = 'Sabado de 5 a 10 horas';
    $jornada4->valor = '30000';
    $jornada4->activo = 1 ;
    $jornada4->tipo = 2 ;
    $jornada4 -> save();

    $jornada5 = new Jornada();
    $jornada5->descripcion = 'Domingo de 1 a 5 horas';
    $jornada5->valor = '20000';
    $jornada5->activo = 1 ;
    $jornada5->tipo = 1 ;
    $jornada5 -> save();

    $jornada6 = new Jornada();
    $jornada6->descripcion = 'Domingo de 5 a 10 horas';
    $jornada6->valor = '40000';
    $jornada6->activo = 1 ;
    $jornada6->tipo = 2 ;
    $jornada6 -> save();


    }
}
