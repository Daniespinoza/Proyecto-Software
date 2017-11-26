<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $this->call([
            RoleTableSeeder::class,
            RegionTableSeeder::class,
            UserTableSeeder::class,
            MaterialTableSeeder::class,
            CommuneTableSeeder::class,
            FacultadesTableSeeder::class,
            CarreraTableSeeder::class,
            TipoEstTableSeeder::class,
            ExpositorTableSeeder::class,
            PersonalTableSeeder::class,
            TipoEncargadoTableSeeder::class,
            DepartamentTableSeeder::class,
            EstablecimientoTableSeeder::class,
            SubtypeTableSeeder::class,
            TypeEventTableSeeder::class,
            HorarioTableSeeder::class
        ]);
    }
}
