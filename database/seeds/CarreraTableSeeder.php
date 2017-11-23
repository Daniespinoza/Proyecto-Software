<?php

use Illuminate\Database\Seeder;
use App\Carrera;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrera1 = new Carrera();
        $carrera1->id_facultad = 1;
        $carrera1->nombre = 'Administración Pública';
        $carrera1->save();

        $carrera2 = new Carrera();
        $carrera2->id_facultad = 1;
        $carrera2->nombre = 'Bibliotecología y Documentación';
        $carrera2->save();

        $carrera3 = new Carrera();
        $carrera3->id_facultad = 1;
        $carrera3->nombre = 'Contador Público y Auditor';
        $carrera3->save();

        $carrera4 = new Carrera();
        $carrera4->id_facultad = 1;
        $carrera4->nombre = 'Ingeniería Comercial';
        $carrera4->save();

        $carrera5 = new Carrera();
        $carrera5->id_facultad = 1;
        $carrera5->nombre = 'Ingeniería en Adminitración Agroindustrial';
        $carrera5->save();

        $carrera6 = new Carrera();
        $carrera6->id_facultad = 1;
        $carrera6->nombre = 'Ingeniería en Comercio Internacional';
        $carrera6->save();

        $carrera7 = new Carrera();
        $carrera7->id_facultad = 1;
        $carrera7->nombre = 'Ingeniería en Gestión Turística';
        $carrera7->save();

        $carrera8 = new Carrera();
        $carrera8->id_facultad = 2;
        $carrera8->nombre = 'Arquitectura';
        $carrera8->save();

        $carrera9 = new Carrera();
        $carrera9->id_facultad = 2;
        $carrera9->nombre = 'Ingeniería Civil en Obras Civiles';
        $carrera9->save();

        $carrera0 = new Carrera();
        $carrera0->id_facultad = 2;
        $carrera0->nombre = 'Ingeniería Civil en Prevención de Riesgos y Medio Ambiente';
        $carrera0->save();

        $carrera11 = new Carrera();
        $carrera11->id_facultad = 2;
        $carrera11->nombre = 'Ingeniería en Construcción';
        $carrera11->save();

        $carrera22 = new Carrera();
        $carrera22->id_facultad = 3;
        $carrera22->nombre = 'Ingeniería en Biotecnología';
        $carrera22->save();

        $carrera33 = new Carrera();
        $carrera33->id_facultad = 3;
        $carrera33->nombre = 'Ingeniería en Industria Alimentaria';
        $carrera33->save();

        $carrera44 = new Carrera();
        $carrera44->id_facultad = 3;
        $carrera44->nombre = 'Ingeniería en Química';
        $carrera44->save();

        $carrera55 = new Carrera();
        $carrera55->id_facultad = 3;
        $carrera55->nombre = 'Química Industrial';
        $carrera55->save();

        $carrera66 = new Carrera();
        $carrera66->id_facultad = 4;
        $carrera66->nombre = 'Cartografía y Geomática';
        $carrera66->save();

        $carrera77 = new Carrera();
        $carrera77->id_facultad = 4;
        $carrera77->nombre = 'Diseño en Comunicación Visual';
        $carrera77->save();

        $carrera88 = new Carrera();
        $carrera88->id_facultad = 4;
        $carrera88->nombre = 'Diseño Industrial';
        $carrera88->save();

        $carrera99 = new Carrera();
        $carrera99->id_facultad = 4;
        $carrera99->nombre = 'Trabajo Social';
        $carrera99->save();

        $carrera00 = new Carrera();
        $carrera00->id_facultad = 5;
        $carrera00->nombre = 'Dibujante Proyectista';
        $carrera00->save();

        $carrera111 = new Carrera();
        $carrera111->id_facultad = 5;
        $carrera111->nombre = 'Ingeniería Civil Electrónica';
        $carrera111->save();

        $carrera222 = new Carrera();
        $carrera222->id_facultad = 5;
        $carrera222->nombre = 'Ingeniería Civil en Computación Mención Informática';
        $carrera222->save();

        $carrera333 = new Carrera();
        $carrera333->id_facultad = 5;
        $carrera333->nombre = 'Ingeniería Civil en Mecánica';
        $carrera333->save();

        $carrera444 = new Carrera();
        $carrera444->id_facultad = 5;
        $carrera444->nombre = 'Ingeniería en Mecánica';
        $carrera444->save();

        $carrera555 = new Carrera();
        $carrera555->id_facultad = 5;
        $carrera555->nombre = 'Ingeniería Civil Industrial';
        $carrera555->save();

        $carrera666 = new Carrera();
        $carrera666->id_facultad = 5;
        $carrera666->nombre = 'Ingeniería en Geomensura';
        $carrera666->save();

        $carrera777 = new Carrera();
        $carrera777->id_facultad = 5;
        $carrera777->nombre = 'Ingeniería en Informática';
        $carrera777->save();

        $carrera888 = new Carrera();
        $carrera888->id_facultad = 5;
        $carrera888->nombre = 'Ingeniería en Transporte y Tránsito';
        $carrera888->save();

        $carrera999 = new Carrera();
        $carrera999->id_facultad = 5;
        $carrera999->nombre = 'Ingeniería Industrial';
        $carrera999->save();
    }
}
