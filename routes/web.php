<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\postController;
use App\Http\Controller\commentController;
use App\Http\Controller\userConntroller;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('post', postController::class);
Route::resource('comment', commentController::class);
Route::resource('User', userConntroller::class);
