<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Etape;
use App\Recette;
use Faker\Generator as Faker;

$factory->define(Etape::class, function (Faker $faker) {
    return [
        'numero' => $faker->numberBetween($min = 1, $max = 10),
        'description' => $faker->realText($maxNbChars = 255, $indexSize = 2),
        'recette_id' => $faker->randomElement(Recette::pluck('id')->toArray()),
    ];
});
