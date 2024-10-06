<?php

use App\Http\Controllers\ConferenceController;

Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
