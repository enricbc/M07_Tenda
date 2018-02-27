<?php

use Illuminate\Database\Seeder;

class TaulaProductesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productes')->insert([
          'nom' => str_random(8),
          'descripcio' => str_random(70),
          'url' => str_random(10), // secret
          'preu' => mt_rand(100, 1000),
          'quantitat' => mt_rand(100, 1000)
        ]);
    }
}
