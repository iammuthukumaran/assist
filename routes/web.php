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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/website', function () {
    return view('website/home');
});
Route::get('/website/about', function () {
    return view('website/about');
});
Route::get('/website/contact', function () {
    return view('website/contact');
});


Route::get('/assist','AssistController@create');
Route::post('/assist/store','AssistController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
