<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Prisijungimo maršrutai
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Maršrutai, kurie reikalauja autentifikacijos
Route::middleware(['auth'])->group(function () {
    Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
    Route::post('/conferences/register/{id}', [ConferenceController::class, 'register'])->name('conferences.register');

    Route::middleware(['admin'])->group(function () {
        Route::resource('conferences', ConferenceController::class)->except(['index', 'register']);
    });
});

// Tinkamai apibrėžkite Auth maršrutus
Auth::routes();

// Pagrindinio puslapio maršrutas
Route::get('/home', [HomeController::class, 'index'])->name('home');
