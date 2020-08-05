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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//////////////// room gaming /////////////////////
Route::get("/gaming", "GamingController@index");
Route::get("/gaming/create", "GamingController@create");
Route::post("/gaming", "GamingController@store");
Route::get("/gaming/{id}", "GamingController@show");
Route::get("/gaming/{id}/edit", "GamingController@edit");
Route::put("/gaming/{id}", "GamingController@update");
Route::delete("/gaming/{id}", "GamingController@destroy");
//////////////// response ////////////////////////
Route::post("/gamingresponse/{id}", "GamingResponseController@store");
//////////////////////////////////////////////////

//////////////// room cooking ////////////////////
Route::get("/cooking", "CookingController@index");
Route::get("/cooking/create", "CookingController@create");
Route::post("/cooking", "CookingController@store");
Route::get("/cooking/{id}", "CookingController@show");
Route::get("/cooking/{id}/edit", "CookingController@edit");
Route::put("/cooking/{id}", "CookingController@update");
Route::delete("/cooking/{id}", "CookingController@destroy");
//////////////// response ////////////////////////
Route::post("/cookingresponse/{id}", "CookingResponseController@store");
//////////////////////////////////////////////////

//////////////// room travelling /////////////////
Route::get("/travelling", "TravellingController@index");
Route::get("/travelling/create", "TravellingController@create");
Route::post("/travelling", "TravellingController@store");
Route::get("/travelling/{id}", "TravellingController@show");
Route::get("/travelling/{id}/edit", "TravellingController@edit");
Route::put("/travelling/{id}", "TravellingController@update");
Route::delete("/travelling/{id}", "TravellingController@destroy");
//////////////// response ////////////////////////
Route::post("/travellingresponse/{id}", "TravellingResponseController@store");
//////////////////////////////////////////////////