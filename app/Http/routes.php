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

Route::group(['middleware' => ['web']], function () {


Route::get('/', function () {
    return view('welcome');
});

Route::get ('/lorem', 'LoremController@getIndex');
Route::post ('/lorem/show', 'LoremController@postShow');
Route::get ('/users', 'UsersController@getIndex');
Route::post ('/users/show', 'UsersController@postShow');
//$faker = Faker\Factory::create();
//echo $faker->name;


});
