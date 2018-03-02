<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
      'name' => $faker->word,
      'description' => $faker->paragraph(3),
      'price' => $faker->numberBetween(100,1000), // secret
      'stock' => $faker->numberBetween(0,100),
      'discount' => $faker->numberBetween(0,30),
    ];
});
