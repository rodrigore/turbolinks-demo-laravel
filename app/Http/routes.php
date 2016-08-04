<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/exampleRedirection', 'HomeController@example');

Route::get('/login', 'HomeController@login');

Route::get('/login-ujs', 'HomeController@loginUJS');

Route::post('/login', 'HomeController@store');
