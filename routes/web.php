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

Route::get('/', 'ArticleController@index')->name('article');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::post('/article', 'ArticleController@store')->name('article.store');

Route::get('/plant', 'PlantController@index')->name('plant');
Route::post('/plant', 'PlantController@store')->name('plant.store');
Route::get('/plant/create', 'PlantController@create')->name('plant.create');

Route::get('/criteria', 'CriteriaController@index')->name('criteria');
Route::post('/criteria', 'CriteriaController@store')->name('criteria.store');
Route::get('/criteria/create', 'CriteriaController@create')->name('criteria.create');

Route::get('/value', 'ValueController@index')->name('value');
Route::post('/value', 'ValueController@store')->name('value.store');
Route::get('/value/create', 'ValueController@create')->name('value.create');

Route::get('/data', 'DataController@index')->name('data');
Route::post('/data', 'DataController@store')->name('data.store');
Route::get('/data/create', 'DataController@create')->name('data.create');
Route::get('/sppk', 'DataController@sppk')->name('sppk');
Route::post('/sppk', 'DataController@hitungsppk')->name('sppk.store');

Route::get('/users', 'UsersController@index')->name('users');
