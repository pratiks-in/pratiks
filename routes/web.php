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

Route::get('/','PostController@index');
Route::get('/post/{slug}','PostController@getpost');
Route::get('/contact','ContactMeController@create');
Route::post('/contact','ContactMeController@store');

Route::get('/about', function () {
    return view('about');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
