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
      $feria->subtipo = 'Feria';
      $feria->descripcion = null;
      $feria->save();

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
