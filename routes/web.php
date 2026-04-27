<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/login', function () {
    return view('login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('notes', NoteController::class);
});

require __DIR__.'/auth.php';
