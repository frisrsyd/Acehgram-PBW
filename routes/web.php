<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;


Route::get('/', [PostController::class, 'index']);
Route::get('/home', [PostController::class, 'index']);
Route::post('sign-up', [AuthController::class, 'store']);
Route::post('sign-in', [AuthController::class, 'login']);
Route::get('/sign-in', [PostController::class, 'signIn'])->middleware('guest');
Route::get('/sign-up', [PostController::class, 'signUp'])->middleware('guest');
Route::get('/forgotPass', [PostController::class, 'forgot']);
Route::get('/profile', [PostController::class, 'profile']);

Route::middleware('auth')->group(function () {
    Route::get('/createpost', [PostController::class, 'createPost']);
    Route::get('/edit-post/{post}', [PostController::class, 'editPost']);
    Route::get('/delete-post/{post}', [PostController::class, 'deletePost']);
    Route::get('edit-profile/{user}', [PostController::class, 'editProfile']);
    
    Route::put('edit-profile/{user}', [AuthController::class, 'updateProfile']);
    
    Route::put('/update-post/{post}', [PostController::class, 'updatePost']);
    
    Route::post('createpost', [PostController::class, 'store']);
    Route::post('logout', [AuthController::class, 'logout']);
});