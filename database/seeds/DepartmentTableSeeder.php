<?php

use Illuminate\Database\Seeder;
use App\Departament;

class DepartamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tipo = new Departament();
      $tipo->descripcion = 'MUN';
      $tipo->save();

      $tipo1 = new Departament();
      $tipo1->descripcion = 'A.D.';
      $tipo1->save();

      $tipo2 = new Departament();
      $tipo2->descripcion = 'P.S.';
      $tipo2->save();

      $tipo3 = new Departament();
      $tipo3->descripcion = 'P.P.';
      $tipo3->save();

      $tipo4 = new Departament();
      $tipo4->descripcion = 'VARIOS';
      $tipo4->save();

      $tipo5 = new Departament();
      $tipo5->descripcion = 'PREU';
      $tipo5->save();

    }
}
