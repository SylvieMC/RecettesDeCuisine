<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Utilisateur;
use App\Avatar;
use Faker\Generator as Faker;

$factory->define(Utilisateur::class, function (Faker $faker) {
    return [
        'pseudo' => $faker->unique()->userName,
        'role' => $faker->randomElement(['admin', 'invite','autre']),
        'avatar_id' => $faker->randomElement(Avatar::pluck('id')->toArray()),
    ];
});
