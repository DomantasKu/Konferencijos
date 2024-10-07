<?php

use App\Http\Controllers\ConferenceController;

Route::get('/', function () {
    return redirect()->route('conferences.index'); // Redirect root to conferences index
});

Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{conference}', [ConferenceController::class, 'update'])->name('conferences.update');
Route::get('/conferences/{conference}', [ConferenceController::class, 'show'])->name('conferences.show');
Route::get('/conferences/{conference}/register', [ConferenceController::class, 'showRegistrationForm'])->name('conferences.showRegistrationForm'); // New route for registration form
Route::post('/conferences/{conference}/register', [ConferenceController::class, 'register'])->name('conferences.register'); // New route for registering participants
Route::delete('/conferences/{conference}', [ConferenceController::class, 'destroy'])->name('conferences.destroy'); // Route for removing a conference

