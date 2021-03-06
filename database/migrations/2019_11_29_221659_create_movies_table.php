<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('ID');
            $table->unsignedInteger('DirectorID');
            $table->unsignedInteger('GenreID');
            $table->string('Title',200);
            $table->year('ReleaseYear');
            $table->integer('Rating');
            $table->integer('MovieLength');
            $table->timestamps();

            $table->foreign('DirectorID')->references('ID')->on('Directors');
            $table->foreign('GenreID')->references('ID')->on('Genres');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
