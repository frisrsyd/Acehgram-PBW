<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firebase\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PostController::class, 'index']);
Route::get('/sign-in', [PostController::class, 'signIn']);
Route::get('/sign-up', [PostController::class, 'signUp']);
Route::get('/forgotPass', [PostController::class, 'forgot']);
