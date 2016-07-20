<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', 'HomeController@index');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'HomeController@store');
