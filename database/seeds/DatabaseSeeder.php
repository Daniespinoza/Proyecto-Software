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
            CommuneTableSeeder::class
        ]);/*
        $this->call(RegionTableSeeder::class);
        $this->call(CommuneTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'expositor2',
            'email' => 'expositor2'.'@gmail.com',
            'password' => bcrypt('expositor2'),
            'id_rol' => 4;
        ]);*/
    }
}
