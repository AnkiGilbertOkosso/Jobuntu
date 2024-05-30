<?php

use App\Http\Controllers\EmployerController;
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
Route::middleware(['auth', 'verified', 'employer', 'check.employer.profile'])->group(function () {
    Route::get('employer/dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');
    Route::get('employer/profile/complete', [EmployerController::class, 'showCompleteProfileForm'])->name('employer.completeProfileForm');
    Route::post('employer/profile/complete', [EmployerController::class, 'completeProfile'])->name('employer.completeProfile');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
