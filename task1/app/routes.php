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

Route::get('/', function(){
    return Redirect::route('home');
});

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/articles', 'HomeController@articles');
Route::get('/article/{num}', 'HomeController@article');
Route::get('/about', 'HomeController@about');
Route::get('/contact-us', 'HomeController@contact');
Route::post('/contact-us', 'HomeController@formCheck');
Route::get('/thank-you', ['as' => 'thankyou', 'uses' => 'HomeController@success']);
