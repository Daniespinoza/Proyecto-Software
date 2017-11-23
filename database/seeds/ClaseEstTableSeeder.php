<?php

use Illuminate\Database\Seeder;
use App\EstablishmentClass;

class ClaseEstTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CH	TP	CH/TP	VARIOS	PREU
        $c1 = new EstablishmentClass();
        $c1->tipo = 'CH';
        $c1->save();

        $c2 = new EstablishmentClass();
        $c2->tipo = 'TP';
        $c2->save();

        $c3 = new EstablishmentClass();
        $c3->tipo = 'CH/TP';
        $c3->save();

        $c4 = new EstablishmentClass();
        $c4->tipo = 'VARIOS';
        $c4->save();

        $c5 = new EstablishmentClass();
        $c5->tipo = 'PREU';
        $c5->save();

    }
}
