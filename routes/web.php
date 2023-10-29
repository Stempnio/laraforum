<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{threadId}', [PostController::class, 'index']);

Route::get('/signup', [SignupController::class, 'showSignupForm']);

Route::post('/signup', [SignupController::class, 'signup']);

Route::get('/login', [LoginController::class, 'showLoginForm']);

Route::post('/login', [LoginController::class, 'login']);
