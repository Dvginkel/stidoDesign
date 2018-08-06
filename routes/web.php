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
    return view('home');
});

Route::get('over-mij', function (){
    return view('aboutme');
});

Route::get('portfolio', function (){
    return view('portfolio');
});

Route::get('contact', function (){
    return view('contact');
});

Route::get('over-mij', function (){
    return view('aboutme');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
