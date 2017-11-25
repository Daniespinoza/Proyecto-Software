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
      //CH	TP	CH/TP	VARIOS	PREU
      $c1 = new Establishmenttype();
      $c1->tipo = 'CH';
      $c1->save();

      $c2 = new Establishmenttype();
      $c2->tipo = 'TP';
      $c2->save();

      $c3 = new Establishmenttype();
      $c3->tipo = 'CH/TP';
      $c3->save();

      $c4 = new Establishmenttype();
      $c4->tipo = 'VARIOS';
      $c4->save();

      $c5 = new Establishmenttype();
      $c5->tipo = 'PREU';
      $c5->save();

    }
}
