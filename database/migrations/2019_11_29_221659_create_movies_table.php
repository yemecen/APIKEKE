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
            $table->increments('MovieID');
            $table->string('LastName',200);
            $table->unsignedInteger('DirectorID');
            $table->unsignedInteger('GenreID');
            $table->string('Title',200);
            $table->year('ReleaseYear');
            $table->float('Rating', 1, 1);
            $table->integer('MovieLength');

            $table->foreign('DirectorID')->references('DirectorID')->on('Directors');
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
        Schema::dropIfExists('movies');
    }
}
