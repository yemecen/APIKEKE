<?php

namespace App\Http\Controllers\Api\v1;

use App\Director;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\DirectorResource;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        return new DirectorResource($director);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(director $director)
    {
        //
    }
}
