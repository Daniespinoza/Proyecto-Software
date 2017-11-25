<?php

use Illuminate\Database\Seeder;
use App\Staff;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $personal = new Staff();
      $personal->nombre = 'Verónica';
      $personal->apellido_paterno = 'Paterno';
      $personal->apellido_materno = 'Materno';
      $personal->rut = '9.999.999-9';
      $personal->run = 9999999;
      $personal->id_rol = 1;
      $personal->correo = 'veronica@utem.cl';
      $personal->activo = true;
      $personal->id_user = 1;
      $personal->save();

      $personal2 = new Staff();
      $personal2->nombre = 'Amaya';
      $personal2->apellido_paterno = 'Paterno2';
      $personal2->apellido_materno = 'Materno2';
      $personal2->rut = '8.888.888-8';
      $personal2->run = 8888888;
      $personal2->id_rol = 2;
      $personal2->correo = 'amaya@utem.cl';
      $personal2->activo = true;
      $personal2->id_user = 2;
      $personal2->save();

      $personal3 = new Staff();
      $personal3->nombre = 'Secretaria';
      $personal3->apellido_paterno = 'Paterno3';
      $personal3->apellido_materno = 'Materno3';
      $personal3->rut = '7.777.777-7';
      $personal3->run = 7777777;
      $personal3->id_rol = 3;
      $personal3->correo = 'secretaria@utem.cl';
      $personal3->activo = true;
      $personal3->id_user = 3;
      $personal3->save();
    }
}
