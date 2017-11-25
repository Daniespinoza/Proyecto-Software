<?php

use Illuminate\Database\Seeder;
use App\Establishment;

class EstablecimientoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $est = new Establishment();
        $est->rbd = 9259;
        $est->nombre_establecimiento = 'Colegio Santo Tomás de Ñuñoa';
        $est->id_comuna = 19;
        $est->direccion = 'Irarrázabal 5310';
        $est->id_depto = 4;
        $est->id_tipo_establecimiento = 1;
        $est->encargado = 'Valentina Ibar Cifuentes';
        $est->id_cargo = 1;
        $est->correo = 'valentinaibar@santotomas.cl';
        $est->telefono = 224965246;
        $est->pace = '';
        $est->save();

        $est = new Establishment();
        $est->rbd = 9347;
        $est->nombre_establecimiento = 'Andrew College';
        $est->id_comuna = 9;
        $est->direccion = 'San José de la Estrella 364';
        $est->id_depto = 3;
        $est->id_tipo_establecimiento = 3;
        $est->encargado = 'Patricio Fuentes';
        $est->id_cargo = 4;
        $est->correo = 'pfuentesv@gmail.com';
        $est->telefono = 222814519;
        $est->pace = 'Comercial-Industrial-Técnico';
        $est->save();
    }
}
