<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('notes', NoteController::class);
});

require __DIR__.'/auth.php';
