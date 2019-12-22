<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['ID','DirectorID','GenreID','Title','ReleaseYear','Rating','MovieLength'];

    public function director()
    {
        return $this->belongsTo(Director::class,'Director_ID');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class,'MovieGenre');   
    }
}
