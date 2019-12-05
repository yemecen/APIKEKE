<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MovieActor;
use App\Movie;
use App\Actor;
use Faker\Generator as Faker;

$factory->define(MovieActor::class, function (Faker $faker) {
    return [
        'MovieID' => Movie::inRandomOrder()->value('MovieID'),
        'ActorID' => Actor::inRandomOrder()->value('ActorID')
    ];
});
