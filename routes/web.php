<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('post', post::class);
Route::resource('comment', comment::class);
Route::resource('user', User::class);
