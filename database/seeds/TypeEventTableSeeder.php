<?php

use Illuminate\Database\Seeder;
use App\Eventtype;

class TypeEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $feria = new Eventtype();
      $feria->subtipo = 'Feria ';
      $feria->descripcion = null;
      $feria->save();

      $feria1 = new Eventtype();
      $feria1->subtipo = 'Feria Panoramia';
      $feria1->descripcion = null;
      $feria1->save();

      $feria2 = new Eventtype();
      $feria2->subtipo = 'Feria FOE';
      $feria2->descripcion = null;
      $feria2->save();

      $feria3 = new Eventtype();
      $feria3->subtipo = 'Feria SIAD Rancagua ';
      $feria3->descripcion = null;
      $feria3->save();

      $feria4 = new Eventtype();
      $feria4->subtipo = 'Feria SIAD Estacion Mapocho ';
      $feria4->descripcion = null;
      $feria4->save();

      $feria5 = new Eventtype();
      $feria5->subtipo = 'Feria SP21 Maipú';
      $feria5->descripcion = null;
      $feria5->save();

      $charla = new Eventtype();
      $charla->subtipo = 'Charla en Colegios';
      $charla->descripcion = null;
      $charla->save();

      $editorial = new Eventtype();
      $editorial->subtipo = 'Editorial';
      $editorial->descripcion = null;
      $editorial->save();

      $desarrollo = new Eventtype();
      $desarrollo->subtipo = 'Desarrollo Cultural';
      $desarrollo->descripcion = null;
      $desarrollo->save();

      $visita = new Eventtype();
      $visita->subtipo = 'Visita Guiada + Charla en UTEM';
      $visita->descripcion = null;
      $visita->save();

      $ensayo = new Eventtype();
      $ensayo->subtipo = 'Ensayo PSU';
      $ensayo->descripcion = null;
      $ensayo->save();

      $otros = new Eventtype();
      $otros->subtipo = 'Otros';
      $otros->descripcion = null;
      $otros->save();


    }
}
