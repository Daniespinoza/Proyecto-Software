<?php

use Illuminate\Database\Seeder;
use App\Facultad;

class FacultadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fae = new Facultad();
        $fae->nombre = 'FAE';
        $fae->save();

        $fccyot = new Facultad();
        $fccyot->nombre = 'FCCYOT';
        $fccyot->save();

        $fcnmyma = new Facultad();
        $fcnmyma->nombre = 'FCNMYMA';
        $fcnmyma->save();

        $fhytcs = new Facultad();
        $fhytcs->nombre = 'FHYTCS';
        $fhytcs->save();

        $macul = new Facultad();
        $macul->nombre = 'FI';
        $macul->save();




    }
}
