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
        Schema::create('movieactors', function (Blueprint $table) {
            $table->unsignedInteger('MovieID');
            $table->inteunsignedIntegerger('ActorID');

            $table->foreign('MovieID')->references('MovieID')->on('Movies');
            $table->foreign('ActorID')->references('ActorID')->on('Actors');
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
