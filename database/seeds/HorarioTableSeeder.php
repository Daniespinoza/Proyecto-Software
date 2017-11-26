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
        $horario = new Disponibilidad();
        $horario->id_expositor = 1;
        $horario->lunes = null ;
        $horario->martes = 'Mañana' ;
        $horario->miercoles = 'Mañana' ;
        $horario->jueves = 'Tarde' ;
        $horario->viernes = 'Todo el Día' ;
        $horario->sabado = null ;
        $horario->total_m = 3;
        $horario->total_t = 2;
        $horario->save();

    }
}
