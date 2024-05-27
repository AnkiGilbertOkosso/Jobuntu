<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Candidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $userRole = Auth::user()->role;
        
        // Employer
        if ($userRole == 2) {
            return redirect()->route('candidate.dashboard');

        }
        // Candidate
        elseif ($userRole == 1) {
            return $next($request);
        }
    }
}
