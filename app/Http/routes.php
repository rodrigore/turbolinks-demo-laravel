<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    // testing
    return redirect('/home')
        ->with('_turbolinks_location', '/home');
});

Route::get('/home', 'HomeController@index');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'HomeController@store');
