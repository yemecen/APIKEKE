<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){

    Route::apiResource('/movie', 'Api\v1\MovieController')
        ->only('show');
    Route::apiResource('/movies', 'Api\v1\MovieController')
        ->only('index');

    Route::apiResource('/director', 'Api\v1\DirectorController')
        ->only('show');
});