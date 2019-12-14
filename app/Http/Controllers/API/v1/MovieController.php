<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;
use App\Http\Resources\v1\MovieResource;
use App\Http\Resources\v1\MovieResourceCollection;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new MovieResourceCollection(Movie::paginate(5));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }

}
