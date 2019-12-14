<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function director()
    {
        return $this->belongsTo(Director::class,'Director_ID');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class,'MovieActor');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class,'MovieGenre');   
    }
}
