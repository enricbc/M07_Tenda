<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'nom' => $faker->sentence,
      'descripcio' => $faker->paragraph,
      'url' => $faker->url, // secret
      'preu' => $faker->decimal,
      'quantitat' => $faker->integer
    ];
});
