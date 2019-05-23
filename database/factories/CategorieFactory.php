<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Categorie::class, function (Faker $faker) {
    return [
        'nom' => $faker->randomElement(['Dessert', 'Entrée','Plat','Salé','Sucré','Spécialité']),
        'description' => $faker->realText($maxNbChars = 255, $indexSize = 2),
    ];
});
