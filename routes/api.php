<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return "Skripsi Brian Rizqi 162410101007";
});
Route::post('/login', 'UsersController@login');
Route::post('/register', 'UsersController@register');

Route::get('/cuaca', 'PlantsController@cuaca');
Route::get('/getCuaca', 'PlantsController@getCuaca');

Route::get('/article', 'ArticleController@indexApi');

Route::get('/area/{id}', 'AreaController@indexApi');
Route::post('/area', 'AreaController@store');

Route::get('/planting/{id}', 'PlantingController@indexApi');
Route::post('/planting/{id}/edit', 'PlantingController@update');
Route::post('/planting', 'PlantingController@store');

Route::get('/plant', 'PlantController@indexApi');

Route::post('/sppk', 'DataController@hitungsppk');

Route::get('/user/{id}', 'UsersController@edit');
Route::post('/user', 'UsersController@update');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
