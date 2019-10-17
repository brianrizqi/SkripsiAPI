<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return "Skripsi Brian Rizqi 162410101007";
});
Route::post('/login', 'UsersController@login');
Route::post('/register', 'UsersController@register');

Route::get('/cuaca', 'PlantsController@cuaca');

Route::get('/article', 'ArticleController@indexApi');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
