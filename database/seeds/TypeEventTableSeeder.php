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
      $tipo = new Eventtype();
      $tipo->id_subtipo = 1;
      $tipo->descripcion = 'Panoramia';
      $tipo->save();

      $tipo1 = new Eventtype();
      $tipo1->id_subtipo = 1;
      $tipo1->descripcion = 'FOE';
      $tipo1->save();

      $tipo2 = new Eventtype();
      $tipo2->id_subtipo = 1;
      $tipo2->descripcion = 'SIAD Rancagua';
      $tipo2->save();

      $tipo3 = new Eventtype();
      $tipo3->id_subtipo = 1;
      $tipo3->descripcion = 'SIAD Estación Mapocho';
      $tipo3->save();

      $tipo4 = new Eventtype();
      $tipo4->id_subtipo = 1;
      $tipo4->descripcion = 'Feria SP21: Maipú';
      $tipo4->save();

      $tipo5 = new Eventtype();
      $tipo5->id_subtipo = 1;
      $tipo5->descripcion = 'Otro';
      $tipo5->save();

      $tipo6 = new Eventtype();
      $tipo6->id_subtipo = 2;
      $tipo6->descripcion = '4to Medio';
      $tipo6->save();

      $tipo7 = new Eventtype();
      $tipo7->id_subtipo = 2;
      $tipo7->descripcion = '3ro Medio';
      $tipo7->save();

      $tipo8 = new Eventtype();
      $tipo8->id_subtipo = 2;
      $tipo8->descripcion = '2do Medio';
      $tipo8->save();

      $tipo9 = new Eventtype();
      $tipo9->id_subtipo = 2;
      $tipo9->descripcion = '1ro Medio';
      $tipo9->save();

      $tipo0 = new Eventtype();
      $tipo0->id_subtipo = 2;
      $tipo0->descripcion = 'Preuniversitario';
      $tipo0->save();

      $tipo11 = new Eventtype();
      $tipo11->id_subtipo = 2;
      $tipo11->descripcion = 'Otro';
      $tipo11->save();

      $tipo22 = new Eventtype();
      $tipo22->id_subtipo = 5;
      $tipo22->descripcion = '4to Medio';
      $tipo22->save();

      $tipo33 = new Eventtype();
      $tipo33->id_subtipo = 5;
      $tipo33->descripcion = '3ro Medio';
      $tipo33->save();

      $tipo44 = new Eventtype();
      $tipo44->id_subtipo = 5;
      $tipo44->descripcion = 'Otro';
      $tipo44->save();


    }
}
