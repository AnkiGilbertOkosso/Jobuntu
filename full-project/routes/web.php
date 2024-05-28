<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Candidate
Route::get('/candidate/dashboard', function () {
    return view('candidate.dashboard');
})->middleware(['auth', 'verified', 'candidate'])->name('candidate.dashboard');

// Employer
Route::get('employer/dashboard', function () {
    return view('.employer.dashboard');
})->middleware(['auth', 'verified', 'employer'])->name('employer.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
