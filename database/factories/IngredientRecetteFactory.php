<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\IngredientRecette;
use App\Ingredient;
use App\Recette;
use Faker\Generator as Faker;

$factory->define(IngredientRecette::class, function (Faker $faker) {
    return [
        'quantite' => $faker->numberBetween($min = 1, $max = 5000),
        'unite' => $faker->randomElement(['grammes', 'litres','ml']),
        'ingredient_id' => $faker->randomElement(Ingredient::pluck('id')->toArray()),
        'recette_id' => $faker->randomElement(Recette::pluck('id')->toArray()),
    ];
});
