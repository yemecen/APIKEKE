<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class,'movie_actor');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class,'movie_genre');   
    }
}
