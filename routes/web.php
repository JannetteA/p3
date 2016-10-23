<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Define all of the routes that are handled by application. Respond by 
| using Closure or controller method. 
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ipsum','IpsumController@index')->name ('ipsum.index');

Route::post('/ipsum', 'IpsumController@store')->name('ipsum.store');

Route::get('/ipsum/{paragraphs}','IpsumController@show')->name ('ipsum.show');



Route::get('/user','UserController@index')->name ('user.index');

Route::post('/user', 'UserController@store')->name('user.store');

Route::get('/user/{users}','UserController@show')->name ('user.show');




