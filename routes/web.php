<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/app');
    }
    return redirect('/auth');
});

Route::middleware('guest')->group(function () {
    Route::get('/auth', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/register', [LoginController::class, 'register']);
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth', 'checkKeepAlive')->group(function () {
    Route::get('/app', [AppController::class, 'app'])->name('app');

    Route::post('/get-messages', [MessageController::class, 'getMessages']);
    Route::post('/send-message', [MessageController::class, 'sendMessage']);
    Route::post('/enter-group', [GroupController::class, 'enterGroup']);

    Route::post('/keepAlive', [UserController::class, 'keepAlive'])->name('keepAlive');
});
