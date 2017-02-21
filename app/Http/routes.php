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
use Illuminate\Support\Facades\DB;

Route::get('/', 'EventController@index');

Route::get('index','IndexController@index');

Route::get('home', 'HomeController@index');

Route::get('contact','ContactController@index');

Route::get('about','AboutController@index');

Route::get('agent','AgentController@index');

Route::get('events','EventController@index');

Route::get('gallery','GalleryController@index');

Route::get('pull','PullController@index');

Route::get('first','ContactController@index');

Route::get('single','SingleController@index');

Route::get('search','SearchController@show');

Route::get('map','MapController@index');

Route::post('insert','FindController@index');

Route::get('provideXml','MapController@show');

Route::get('insert', function(){
 // DB::insert('insert into post(name, description values (?, ?)', ['francis','LearningLaravel']);
 DB::insert('insert into events (name, description) values (?, ?)', ['gank', 'Dayley']);

 });

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
