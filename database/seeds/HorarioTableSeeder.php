<?php

use Illuminate\Database\Seeder;
use App\Disponibilidad;

class HorarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$horario = new Disponibilidad();
        $horario->id_expositor = 1;
        $horario->lunes = 'Ninguno' ;
        $horario->martes = 'Mañana' ;
        $horario->miercoles = 'Mañana' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Ninguno';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 3;
        $horario->total_t = 2;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 2;
        $horario->lunes = 'Ninguno' ;
        $horario->martes = 'Mañana' ;
        $horario->miercoles = 'Ninguno' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Ninguno';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 2;
        $horario->total_t = 2;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 3;
        $horario->lunes = 'Ninguno' ;
        $horario->martes = 'Todo el Día' ;
        $horario->miercoles = 'Todo el Día' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Ninguno';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 3;
        $horario->total_t = 4;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 4;
        $horario->lunes = 'Mañana' ;
        $horario->martes = 'Mañana' ;
        $horario->miercoles = 'Mañana' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Mañana';
        $horario->domingo = 'Mañana';
        $horario->total_m = 6;
        $horario->total_t = 2;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 5;
        $horario->lunes = 'Todo el Día' ;
        $horario->martes = 'Mañana' ;
        $horario->miercoles = 'Mañana' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Todo el Día';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 5;
        $horario->total_t = 4;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 6;
        $horario->lunes = 'Tarde' ;
        $horario->martes = 'Mañana' ;
        $horario->miercoles = 'Tarde' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Mañana' ;
        $horario->sabado = 'Mañana';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 3;
        $horario->total_t = 3;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 7;
        $horario->lunes = 'Todo el Día' ;
        $horario->martes = 'Todo el Día' ;
        $horario->miercoles = 'Todo el Día' ;
        $horario->jueves = 'Todo el Día' ;
        $horario->viernes = 'Ninguno' ;
        $horario->sabado = 'Ninguno';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 4;
        $horario->total_t = 4;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 8;
        $horario->lunes ='Tarde' ;
        $horario->martes = 'Tarde' ;
        $horario->miercoles = 'Tarde' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Ninguno';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 1;
        $horario->total_t = 5;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 9;
        $horario->lunes = 'Mañana' ;
        $horario->martes = 'Tarde' ;
        $horario->miercoles = 'Mañana' ;
        $horario->jueves = 'Ninguno' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Ninguno';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 3;
        $horario->total_t = 1;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 10;
        $horario->lunes = 'Mañana' ;
        $horario->martes = 'Mañana' ;
        $horario->miercoles = 'Mañana' ;
        $horario->jueves = 'Mañana' ;
        $horario->viernes = 'Mañana' ;
        $horario->sabado = 'Mañana';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 6;
        $horario->total_t = 0;
        $horario->save();

        $horario = new Disponibilidad();
        $horario->id_expositor = 11;
        $horario->lunes = 'Todo el Día' ;
        $horario->martes = 'Todo el Día' ;
        $horario->miercoles = 'Todo el Día' ;
        $horario->jueves = 'Todo el Día' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = 'Ninguno';
        $horario->domingo = 'Ninguno';
        $horario->total_m = 5;
        $horario->total_t = 5;
        $horario->save();
/*
    }
}
