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
        $expo->alu_rut = '11111122-k';
        $expo->run = 11111122;
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

        $expo1 = new Exhibitor();
        $expo1->alu_nombre = 'Expositor1';
        $expo1->alu_apellido_paterno = 'Paterno1';
        $expo1->alu_apellido_materno = 'Materno1';
        $expo1->alu_rut = '11111111-1';
        $expo1->run = 11111111;
        $expo1->genero = 'Femenino';
        $expo1->alu_celular = 56999884466;
        $expo1->alu_email = 'expositor1@utem.cl';
        $expo1->semestres_aprobados = 8;
        $expo1->semestre_actual = 9;
        $expo1->direccion = 'Salomón Sack 8921';
        $expo1->id_comuna = 4;
        $expo1->id_user = 5;
        $expo1->id_carrera = 22;
        $expo1->activo = true;
        $expo1->save();

        $expo2 = new Exhibitor();
        $expo2->alu_nombre = 'Expositor2';
        $expo2->alu_apellido_paterno = 'Paterno2';
        $expo2->alu_apellido_materno = 'Materno2';
        $expo2->alu_rut = '11111112-2';
        $expo2->run = 11111112;
        $expo2->genero = 'Masculino';
        $expo2->alu_celular = 56999887722;
        $expo2->alu_email = 'expositor2@utem.cl';
        $expo2->semestres_aprobados = 8;
        $expo2->semestre_actual = 9;
        $expo2->direccion = 'Salomón Sack 8922';
        $expo2->id_comuna = 14;
        $expo2->id_user = 6;
        $expo2->id_carrera = 24;
        $expo2->activo = true;
        $expo2->save();

        $expo3 = new Exhibitor();
        $expo3->alu_nombre = 'Expositor3';
        $expo3->alu_apellido_paterno = 'Paterno3';
        $expo3->alu_apellido_materno = 'Materno3';
        $expo3->alu_rut = '11111113-3';
        $expo3->run = 11111113;
        $expo3->genero = 'Femenino';
        $expo3->alu_celular = 56999887266;
        $expo3->alu_email = 'expositor3@utem.cl';
        $expo3->semestres_aprobados = 8;
        $expo3->semestre_actual = 9;
        $expo3->direccion = 'Salomón Sack 8923';
        $expo3->id_comuna = 13;
        $expo3->id_user = 7;
        $expo3->id_carrera = 13;
        $expo3->activo = true;
        $expo3->save();

        $expo4 = new Exhibitor();
        $expo4->alu_nombre = 'Expositor4';
        $expo4->alu_apellido_paterno = 'Paterno4';
        $expo4->alu_apellido_materno = 'Materno4';
        $expo4->alu_rut = '11111114-4';
        $expo4->run = 11111114;
        $expo4->genero = 'Masculino';
        $expo4->alu_celular = 56999537766;
        $expo4->alu_email = 'expositor4@utem.cl';
        $expo4->semestres_aprobados = 8;
        $expo4->semestre_actual = 9;
        $expo4->direccion = 'Salomón Sack 8924';
        $expo4->id_comuna = 20;
        $expo4->id_user = 8;
        $expo4->id_carrera = 24;
        $expo4->activo = true;
        $expo4->save();

        $expo5 = new Exhibitor();
        $expo5->alu_nombre = 'Expositor5';
        $expo5->alu_apellido_paterno = 'Paterno5';
        $expo5->alu_apellido_materno = 'Materno5';
        $expo5->alu_rut = '11111115-5';
        $expo5->run = 11111115;
        $expo5->genero = 'Femenino';
        $expo5->alu_celular = 56995117766;
        $expo5->alu_email = 'expositor5@utem.cl';
        $expo5->semestres_aprobados = 8;
        $expo5->semestre_actual = 9;
        $expo5->direccion = 'Salomón Sack 8925';
        $expo5->id_comuna = 1;
        $expo5->id_user = 9;
        $expo5->id_carrera = 24;
        $expo5->activo = true;
        $expo5->save();

        $expo6 = new Exhibitor();
        $expo6->alu_nombre = 'Expositor6';
        $expo6->alu_apellido_paterno = 'Paterno6';
        $expo6->alu_apellido_materno = 'Materno6';
        $expo6->alu_rut = '11111116-6';
        $expo6->run = 11111116;
        $expo6->genero = 'Femenino';
        $expo6->alu_celular = 56999387766;
        $expo6->alu_email = 'expositor6@utem.cl';
        $expo6->semestres_aprobados = 8;
        $expo6->semestre_actual = 9;
        $expo6->direccion = 'Salomón Sack 8926';
        $expo6->id_comuna = 30;
        $expo6->id_user = 10;
        $expo6->id_carrera = 21;
        $expo6->activo = true;
        $expo6->save();

        $expo7 = new Exhibitor();
        $expo7->alu_nombre = 'Expositor7';
        $expo7->alu_apellido_paterno = 'Paterno7';
        $expo7->alu_apellido_materno = 'Materno7';
        $expo7->alu_rut = '11111117-7';
        $expo7->run = 11111117;
        $expo7->genero = 'Masculino';
        $expo7->alu_celular = 56999827766;
        $expo7->alu_email = 'expositor7@utem.cl';
        $expo7->semestres_aprobados = 8;
        $expo7->semestre_actual = 9;
        $expo7->direccion = 'Salomón Sack 8927';
        $expo7->id_comuna = 9;
        $expo7->id_user = 11;
        $expo7->id_carrera = 7;
        $expo7->activo = true;
        $expo7->save();

        $expo8 = new Exhibitor();
        $expo8->alu_nombre = 'Expositor8';
        $expo8->alu_apellido_paterno = 'Paterno8';
        $expo8->alu_apellido_materno = 'Materno8';
        $expo8->alu_rut = '11111118-8';
        $expo8->run = 11111118;
        $expo8->genero = 'Femenino';
        $expo8->alu_celular = 56999667766;
        $expo8->alu_email = 'expositor8@utem.cl';
        $expo8->semestres_aprobados = 8;
        $expo8->semestre_actual = 9;
        $expo8->direccion = 'Salomón Sack 8928';
        $expo8->id_comuna = 8;
        $expo8->id_user = 12;
        $expo8->id_carrera = 10;
        $expo8->activo = true;
        $expo8->save();

        $expo9 = new Exhibitor();
        $expo9->alu_nombre = 'Expositor9';
        $expo9->alu_apellido_paterno = 'Paterno9';
        $expo9->alu_apellido_materno = 'Materno9';
        $expo9->alu_rut = '11111119-9';
        $expo9->run = 11111119;
        $expo9->genero = 'Masculino';
        $expo9->alu_celular = 56999885766;
        $expo9->alu_email = 'expositor9@utem.cl';
        $expo9->semestres_aprobados = 8;
        $expo9->semestre_actual = 9;
        $expo9->direccion = 'Salomón Sack 8929';
        $expo9->id_comuna = 3;
        $expo9->id_user = 13;
        $expo9->id_carrera = 24;
        $expo9->activo = true;
        $expo9->save();

        $expo0 = new Exhibitor();
        $expo0->alu_nombre = 'Expositor0';
        $expo0->alu_apellido_paterno = 'Paterno0';
        $expo0->alu_apellido_materno = 'Materno0';
        $expo0->alu_rut = '11111110-0';
        $expo0->run = 11111110;
        $expo0->genero = 'Femenino';
        $expo0->alu_celular = 56929887766;
        $expo0->alu_email = 'expositor0@utem.cl';
        $expo0->semestres_aprobados = 8;
        $expo0->semestre_actual = 9;
        $expo0->direccion = 'Salomón Sack 8920';
        $expo0->id_comuna = 34;
        $expo0->id_user = 14;
        $expo0->id_carrera = 12;
        $expo0->activo = true;
        $expo0->save();


    }
}
