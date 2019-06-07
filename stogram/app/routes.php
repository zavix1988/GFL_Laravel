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

//index route
Route::get('/', 'HomeController@showIndex');

//auth routes
//signup routes
Route::get('/auth/signup', 'AuthController@showSignupForm');
Route::post('/auth/signup', 'AuthController@postSignupForm');
//signin routes
Route::get('/auth/login', 'AuthController@showLoginForm');
Route::post('/auth/login', 'AuthController@postLoginForm');
//signout route
Route::get('/auth/logout', 'AuthController@logout');

//upload image route
Route::post('/upload-image', 'HomeController@postImage');

//showImage route
Route::get('/image/{id}', 'HomeController@showImage');
//getImage route
Route::get('/image-file/{id}', 'HomeController@getImageFile');
//setComment route
Route::post('/comment', 'HomeController@postComment');
