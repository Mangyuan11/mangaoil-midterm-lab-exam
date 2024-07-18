<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\post;
use App\Http\Controller\comment;
use App\Http\Controller\user;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('post', post::class);
Route::resource('comment', comment::class);
Route::resource('user', user::class);
