<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController');

//Route::get('/usuarios/create', 'UserController@create');
