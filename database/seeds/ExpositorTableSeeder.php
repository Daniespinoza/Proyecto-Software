<?php

use Illuminate\Database\Seeder;
use App\Exhibitor;


class ExpositorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $expo = new Exhibitor();
        $expo->alu_nombre = 'Expositor';
        $expo->alu_apellido_paterno = 'Paterno';
        $expo->alu_apellido_materno = 'Materno';
        $expo->alu_rut = '11.111.111-k';
        $expo->run = 11111111;
        $expo->genero = 'Masculino';
        $expo->alu_celular = 56999887766;
        $expo->alu_email = 'expositor@utem.cl';
        $expo->semestres_aprobados = 8;
        $expo->semestre_actual = 9;
        $expo->direccion = 'Salomón Sack 892';
        $expo->id_comuna = 3;
        $expo->id_user = 4;
        $expo->id_carrera = 24;
        $expo->activo = true;
        $expo->save();

    }
}
