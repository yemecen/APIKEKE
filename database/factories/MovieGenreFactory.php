<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MovieGenre;
use App\Movie;
use App\Genre;
use Faker\Generator as Faker;

$factory->define(MovieGenre::class, function (Faker $faker) {
    return [
        'MovieID' => Movie::inRandomOrder()->value('ID'),
        'GenreID' => Genre::inRandomOrder()->value('ID')
    ];
});
