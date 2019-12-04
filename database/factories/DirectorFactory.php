<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Director;
use Faker\Generator as Faker;

$factory->define(Director::class, function (Faker $faker) {
    return [
        'FirstName' => $faker->name,
        'LastName' => $faker->word
    ];
});
