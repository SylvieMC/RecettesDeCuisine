<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(Ingredient::class, function (Faker $faker) {
	$faker->addProvider(new \Bezhanov\Faker\Provider\Food($faker));
    return [
        'nom' => $faker->ingredient,
    ];
});
