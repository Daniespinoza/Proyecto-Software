<?php

use Illuminate\Database\Seeder;
use App\Establishmenttype;

class TipoEstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $tipo = new Establishmenttype();
      $tipo->tipo = 'MUN';
      $tipo->save();

      $tipo1 = new Establishmenttype();
      $tipo1->tipo = 'A.D.';
      $tipo1->save();

      $tipo2 = new Establishmenttype();
      $tipo2->tipo = 'P.S.';
      $tipo2->save();

      $tipo3 = new Establishmenttype();
      $tipo3->tipo = 'P.P.';
      $tipo3->save();

      $tipo4 = new Establishmenttype();
      $tipo4->tipo = 'VARIOS';
      $tipo4->save();

      $tipo5 = new Establishmenttype();
      $tipo5->tipo = 'PREU';
      $tipo5->save();
    }
}
