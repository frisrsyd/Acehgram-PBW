<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
Route::get('/home', [PostController::class, 'index']);
Route::get('/sign-in', [PostController::class, 'signIn']);
Route::get('/sign-up', [PostController::class, 'signUp']);
Route::get('/forgotPass', [PostController::class, 'forgot']);
Route::get('/createpost', [PostController::class, 'createPost']);
Route::get('/profile', [PostController::class, 'profile']);
Route::get('/edit-post/{id}', [PostController::class, 'editPost']);
Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);

Route::put('/update-post/{id}', [PostController::class, 'updatePost']);

Route::post('createpost', [PostController::class, 'store']);