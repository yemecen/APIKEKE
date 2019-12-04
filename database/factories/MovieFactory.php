<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use App\Director;
use App\Genre;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'LastName' => $faker->name,
        'DirectorID' => Director::inRandomOrder()->value('DirectorID'),
        'GenreID' => Genre::inRandomOrder()->value('GenreID'),
        'Title' => $faker->word,
        'ReleaseYear' => $faker->year,
        'Rating' => $faker->randomDigit,
        'MovieLength' => $faker->randomDigit 
    ];
});
