<?php

use Illuminate\Database\Seeder;
use App\Establishmentcharge;


class TipoEncargadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $encargado = new Establishmentcharge();
        $encargado->descripcion = 'Orientador/a';
        $encargado->save();

        $encargado2 = new Establishmentcharge();
        $encargado2->descripcion = 'Director/a';
        $encargado2->save();

        $encargado3 = new Establishmentcharge();
        $encargado3->descripcion = 'Psicólogo/a';
        $encargado3->save();

        $encargado4 = new Establishmentcharge();
        $encargado4->descripcion = 'Jefe UTP';
        $encargado4->save();


    }
}
