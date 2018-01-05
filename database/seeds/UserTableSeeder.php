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
      $admin->name = 'Administrador';
      $admin->email = 'Administrador@utem.cl';
      $admin->password = bcrypt('Administrador');
      $admin->id_rol = 1;
      $admin->activo = true;
      $admin->save();
/*
      $roja = new User();
      $roja->name = 'Amaya';
      $roja->email = 'amaya@utem.cl';
      $roja->password = bcrypt('amaya');
      $roja->id_rol = 2;
      $roja->activo = true;
      $roja->save();

      $secretaria = new User();
      $secretaria->name = 'Secretaria';
      $secretaria->email = 'secretaria@utem.cl';
      $secretaria->password = bcrypt('secretaria');
      $secretaria->id_rol = 3;
      $secretaria->activo = true;
      $secretaria->save();

      $expositor = new User();
      $expositor->name = 'Expositor';
      $expositor->email = 'expositor@utem.cl';
      $expositor->password = bcrypt('expositor');
      $expositor->id_rol = 4;
      $expositor->activo = true;
      $expositor->save();

      $expositor1 = new User();
      $expositor1->name = 'Expositor1';
      $expositor1->email = 'expositor1@utem.cl';
      $expositor1->password = bcrypt('expositor1');
      $expositor1->id_rol = 4;
      $expositor1->activo = true;
      $expositor1->save();

      $expositor2 = new User();
      $expositor2->name = 'Expositor2';
      $expositor2->email = 'expositor2@utem.cl';
      $expositor2->password = bcrypt('expositor2');
      $expositor2->id_rol = 4;
      $expositor2->activo = true;
      $expositor2->save();

      $expositor3 = new User();
      $expositor3->name = 'Expositor3';
      $expositor3->email = 'expositor3@utem.cl';
      $expositor3->password = bcrypt('expositor3');
      $expositor3->id_rol = 4;
      $expositor3->activo = true;
      $expositor3->save();

      $expositor4 = new User();
      $expositor4->name = 'Expositor4';
      $expositor4->email = 'expositor4@utem.cl';
      $expositor4->password = bcrypt('expositor4');
      $expositor4->id_rol = 4;
      $expositor4->activo = true;
      $expositor4->save();

      $expositor5 = new User();
      $expositor5->name = 'Expositor5';
      $expositor5->email = 'expositor5@utem.cl';
      $expositor5->password = bcrypt('expositor5');
      $expositor5->id_rol = 4;
      $expositor5->activo = true;
      $expositor5->save();

      $expositor6 = new User();
      $expositor6->name = 'Expositor6';
      $expositor6->email = 'expositor6@utem.cl';
      $expositor6->password = bcrypt('expositor6');
      $expositor6->id_rol = 4;
      $expositor6->activo = true;
      $expositor6->save();

      $expositor7 = new User();
      $expositor7->name = 'Expositor7';
      $expositor7->email = 'expositor7@utem.cl';
      $expositor7->password = bcrypt('expositor7');
      $expositor7->id_rol = 4;
      $expositor7->activo = true;
      $expositor7->save();

      $expositor8 = new User();
      $expositor8->name = 'Expositor8';
      $expositor8->email = 'expositor8@utem.cl';
      $expositor8->password = bcrypt('expositor8');
      $expositor8->id_rol = 4;
      $expositor8->activo = true;
      $expositor8->save();

      $expositor9 = new User();
      $expositor9->name = 'Expositor9';
      $expositor9->email = 'expositor9@utem.cl';
      $expositor9->password = bcrypt('expositor9');
      $expositor9->id_rol = 4;
      $expositor9->activo = true;
      $expositor9->save();

      $expositor0 = new User();
      $expositor0->name = 'Expositor0';
      $expositor0->email = 'expositor0@utem.cl';
      $expositor0->password = bcrypt('expositor0');
      $expositor0->id_rol = 4;
      $expositor0->activo = true;
      $expositor0->save();


*/
    }
}
