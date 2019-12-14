<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //$movies = App\Director::find(1)->with('movies')->get();
    $movies = App\Movie::find(1)->director;
    //$movies = App\Director::find(1);
    dd($movies);
});
