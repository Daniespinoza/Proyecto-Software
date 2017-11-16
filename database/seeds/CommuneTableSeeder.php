<?php

use Illuminate\Database\Seeder;
use App\Commune;

class CommuneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $santiago = new Commune();
          $santiago->nombre = 'Santiago';
          $santiago->id_region = 1;
          $santiago->save();
          
          $providencia = new Commune();
          $providencia->nombre = 'Providencia';
          $providencia->id_region = 1;
          $providencia->save();

          $renca = new Commune();
          $renca->nombre = 'Renca';
          $renca->id_region = 1;
          $renca->save();




    }
}
