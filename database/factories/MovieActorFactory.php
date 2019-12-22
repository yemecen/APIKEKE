<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MovieActor;
use App\Movie;
use App\Actor;
use Faker\Generator as Faker;

$factory->define(MovieActor::class, function (Faker $faker) {
    return [
        'Movie_ID' => Movie::inRandomOrder()->value('ID'),
        'Actor_ID' => Actor::inRandomOrder()->value('ID')
    ];
});
