<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $santiago = new Region();
        $santiago->nombre = 'Santiago';
        $santiago->save();

    }
}
