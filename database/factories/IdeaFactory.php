<?php

use Faker\Generator as Faker;

$factory->define(App\Idea::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3, true),
        'body' => $faker->realText($faker->numberBetween(10, 100))
    ];
});
