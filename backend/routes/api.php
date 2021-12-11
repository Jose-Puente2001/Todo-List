<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/task', 'App\Http\Controllers\TaskController@index');
Route::post('/task/save', 'App\Http\Controllers\TaskController@store');
Route::put('/task/update/{id}', 'App\Http\Controllers\TaskController@update');
Route::delete('/task/destroy/{id}', 'App\Http\Controllers\TaskController@destroy');