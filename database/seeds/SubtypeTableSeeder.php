<?php

use Illuminate\Database\Seeder;
use App\Subtype;

class SubtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $feria = new Subtype();
      $feria->descripcion = 'Feria';
      $feria->save();

      $charla = new Subtype();
      $charla->descripcion = 'Charla en Colegios';
      $charla->save();

      $editorial = new Subtype();
      $editorial->descripcion = 'Editorial';
      $editorial->save();

      $desarrollo = new Subtype();
      $desarrollo->descripcion = 'Desarrollo Cultural';
      $desarrollo->save();

      $visita = new Subtype();
      $visita->descripcion = 'Visita Guiada + Charla en UTEM';
      $visita->save();

      $ensayo = new Subtype();
      $ensayo->descripcion = 'Ensayo PSU';
      $ensayo->save();

      $otros = new Subtype();
      $otros->descripcion = 'Otros';
      $otros->save();

    }
}
