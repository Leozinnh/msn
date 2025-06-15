<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;


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

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/app', function () {
        return view('app.index');
    });
});
