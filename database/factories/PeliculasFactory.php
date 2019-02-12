<?php

use Faker\Generator as Faker;

$factory->define(\App\Pelicula::class, function (Faker $faker) {

    $generos = \App\Genero::all();

    return [
        "title" => $faker->catchphrase(),
        "release_date" => $faker->dateTimeBetween('-30 years','now'),
        "rating" => $faker->numberBetween(0, 10),
        "awards" => $faker->numberBetween(0, 100),
        "length" => $faker->numberBetween(0,200),
        "genre_id" => $generos->shuffle()->first()->id
    ];
});
