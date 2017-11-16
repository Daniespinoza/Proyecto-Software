<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coordarea = new Role();
        $coordarea->permiso = 'Coordinadora de Area';
        $coordarea->save();

        $coordexpo = new Role();
        $coordexpo->permiso = 'Coordinadora de Expositores';
        $coordexpo->save();

        $secretaria = new Role();
        $secretaria->permiso = 'Secretaria';
        $secretaria->save();

        $expositor = new Role();
        $expositor->permiso = 'Expositor';
        $expositor->save();
    }
}
