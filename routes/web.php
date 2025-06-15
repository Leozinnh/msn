<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AppController;


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

Route::middleware('auth')->group(function () {
    Route::get('/app', [AppController::class, 'app'])->name('app');

    Route::post('/get-messages', [AppController::class, 'getMessages']);
    Route::post('/send-message', [AppController::class, 'sendMessage']);
});
