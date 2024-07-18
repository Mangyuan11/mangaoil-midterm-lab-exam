<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\userController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('post', postController::class);
Route::resource('comment', commentController::class);
Route::resource('User', userController::class);
