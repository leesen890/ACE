<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lee;
use Faker\Generator as Faker;

$factory->define(Lee::class, function (Faker $faker) {
    return [
        'username' => $faker -> userName,
        'password' => bcrypt('xxfs888'),
        'name' => $faker -> name(),
        'email' => $faker -> email
    ];
});
