<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'IndexController');

Route::post('/lorem_ipsum', 'LoremIpsumController@lorem_ipsum');
Route::get('/lorem_ipsum', 'LoremIpsumController@index');

Route::post('/random_user', 'RandomUserController@random_user');
Route::get('/random_user', 'RandomUserController@index');

# mainly for debugging things
Route::get('/phpinfo', function () {
  return phpinfo();
});
