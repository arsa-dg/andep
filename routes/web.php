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
    return view('welcome');
});

Route::get("/gaming", "GamingController@index");
Route::get("/gaming/create", "GamingController@create");
Route::post("/gaming", "GamingController@store");
Route::get("/gaming/{id}", "GamingController@show");
Route::get("/gaming/{id}/edit", "GamingController@edit");
Route::put("/gaming/{id}", "GamingController@update");
Route::delete("/gaming/{id}", "GamingController@destroy");