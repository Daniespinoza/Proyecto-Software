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
        $coordarea->permiso = 'Coordinador/a de Área';
        $coordarea->save();

        $coordexpo = new Role();
        $coordexpo->permiso = 'Coordinador/a de Expositores';
        $coordexpo->save();

        $secretaria = new Role();
        $secretaria->permiso = 'Secretario/a';
        $secretaria->save();

        $expositor = new Role();
        $expositor->permiso = 'Expositor/a';
        $expositor->save();
    }
}
