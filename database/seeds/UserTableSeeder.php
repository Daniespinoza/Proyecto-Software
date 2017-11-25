<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new User();
      $admin->name = 'Verónica';
      $admin->email = 'veronica@utem.cl';
      $admin->password = bcrypt('veronica');
      $admin->id_rol = 1;
      $admin->save();

      $roja = new User();
      $roja->name = 'Amaya';
      $roja->email = 'amaya@utem.cl';
      $roja->password = bcrypt('amaya');
      $roja->id_rol = 2;
      $roja->save();

      $secretaria = new User();
      $secretaria->name = 'Secretaria';
      $secretaria->email = 'secretaria@utem.cl';
      $secretaria->password = bcrypt('secretaria');
      $secretaria->id_rol = 3;
      $secretaria->save();

      $expositor = new User();
      $expositor->name = 'Expositor';
      $expositor->email = 'expositor@utem.cl';
      $expositor->password = bcrypt('expositor');
      $expositor->id_rol = 4;
      $expositor->save();

    }
}
