<?php


use App\Http\Controllers\ConferenceController;

Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences/{conference}', [ConferenceController::class, 'show'])->name('conferences.show');
Route::post('/conferences/{conference}/register', [ConferenceController::class, 'register'])->name('conferences.register');
Route::delete('/conferences/{conference}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
Route::get('/conferences/{conference}/register', [ConferenceController::class, 'showRegistrationForm'])->name('conferences.showRegistrationForm');

