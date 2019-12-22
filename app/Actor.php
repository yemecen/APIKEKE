<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['ID','FirstName','LastName'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
