<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Recette;
use App\Utilisateur;
use Faker\Generator as Faker;

$factory->define(Recette::class, function (Faker $faker) {
    return [
        'nom' => $faker->unique()->word,
        'description' => $faker->realText($maxNbChars = 255, $indexSize = 2),
        'temps_preparation' => $faker->numberBetween($min = 3, $max = 200),
        'nombre_portion' => $faker->numberBetween($min = 1, $max = 10),
        'utilisateur_id' => $faker->randomElement(Utilisateur::pluck('id')->toArray()),
    ];
});
