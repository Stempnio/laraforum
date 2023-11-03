<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/thread/create', [ThreadController::class, 'create'])->name('createThread');

    Route::get('/thread/{id}', [ThreadController::class, 'index'])->name('thread');

    Route::post('/thread', [ThreadController::class, 'store'])->name('storeThread');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');

    Route::post('/signup', [SignupController::class, 'signup']);

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    Route::post('/login', [LoginController::class, 'login']);
});
