<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function() { return View::make('hello'); });


//my routes
Route::get('/', 'MusicController@index');
Route::get('/artist/{id}', 'MusicController@artist');
Route::get('/album/{id}', 'MusicController@album');
Route::get('/track/{id}', 'MusicController@track');

/*
а) "/" - выводит список Исполнителей (Artist) с сылками;
б) "/artist/{id}" - выводит список Альбомов (Album) Исполнителя с указанным ID;
в) "/album/{id}" - выводит список Треков (Track) в выбраном альбоме (+ название исполнителя).
г) "/track/{id}" - инфо по указанному треку (+ название исполнителя и альбома).

*/