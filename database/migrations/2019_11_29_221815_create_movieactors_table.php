<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_actors', function (Blueprint $table) {
            $table->unsignedInteger('MovieID');
            $table->unsignedInteger('ActorID');
            $table->timestamps();

            $table->foreign('MovieID')->references('ID')->on('Movies');
            $table->foreign('ActorID')->references('ID')->on('Actors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movieactors');
    }
}
