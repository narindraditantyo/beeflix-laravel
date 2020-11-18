<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MovieDataController@index')->name('home');

Route::get('genres/{genre}', 'MovieDataController@showPerGenre')->name('genre');

Route::get('details/{movie_id}', 'MovieDataController@showDetails')->name('details');
