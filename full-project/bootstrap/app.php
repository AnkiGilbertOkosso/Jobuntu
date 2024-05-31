<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Employer;
use App\Http\Middleware\Candidate;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'employer' => Employer::class,
            'candidate' => Candidate::class,
            'check.employer.profile' => \App\Http\Middleware\CheckEmployerProfileCompletion::class,
            'check.candidate.profile' => \App\Http\Middleware\CheckCandidateProfileCompletion::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
