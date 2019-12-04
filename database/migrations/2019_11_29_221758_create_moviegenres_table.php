<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviegenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_genres', function (Blueprint $table) {
            $table->unsignedInteger('MovieID');
            $table->unsignedInteger('GenreID');
            $table->timestamps();

            $table->foreign('MovieID')->references('MovieID')->on('Movies');
            $table->foreign('GenreID')->references('GenreID')->on('Genres');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moviegenres');
    }
}
