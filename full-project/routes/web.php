<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/jobs', [JobListingController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobListingController::class, 'show'])->name('jobs.show');

// Candidate
Route::middleware(['auth', 'verified', 'candidate', 'check.candidate.profile'])->group(function () {
    Route::get('/candidate/dashboard', [CandidateController::class, 'dashboard'])->name('candidate.dashboard');
    Route::get('candidate/profile/complete', [CandidateController::class, 'showCompleteProfileForm'])->name('candidate.completeProfileForm');
    Route::post('candidate/profile/complete', [CandidateController::class, 'saveProfileStep'])->name('candidate.saveProfileStep');
    Route::put('candidate/profile/edit', [CandidateController::class, 'updateProfile'])->name('candidate.updateProfileStep');
    Route::get('candidate/setting', [CandidateController::class, 'setting'])->name('candidate.profile');
    Route::post('/jobs/{job}/apply', [ApplicationController::class, 'store'])->name('jobs.apply');


    // Candidate's applied jobs route
    Route::get('/candidate/applications', [ApplicationController::class, 'candidateApplications'])->name('candidate.applications');
});


// Employer
Route::middleware(['auth', 'verified', 'employer', 'check.employer.profile'])->group(function () {
    Route::get('company/dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');
    Route::get('company/profile/complete', [EmployerController::class, 'showCompleteProfileForm'])->name('employer.completeProfileForm');
    Route::post('company/profile/complete', [EmployerController::class, 'completeProfile'])->name('employer.completeProfile');
    Route::get('company/profile', [EmployerController::class, 'profile'])->name('employer.profile');
    Route::get('company/jobs', [EmployerController::class, 'jobs'])->name('employer.jobs');
    Route::get('company/profile/update', [EmployerController::class, 'setting'])->name('employer.setting');
    Route::put('company/profile/update', [EmployerController::class, 'updateProfile'])->name('employer.profile.update');

    // Joblisting
    Route::get('/company/jobs/create', [JobListingController::class, 'create'])->name('jobs.create');
    Route::post('/company/jobs/store', [JobListingController::class, 'store'])->name('jobs.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
