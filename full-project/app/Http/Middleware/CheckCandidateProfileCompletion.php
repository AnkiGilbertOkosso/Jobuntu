<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckCandidateProfileCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 1) {
            $candidate = Auth::user()->candidate;

            if (!$candidate) {
                session()->flash('profile_incomplete', 'Please complete your profile.');
            } else {
                if (!$candidate->experience || !$candidate->education ||
                    !$candidate->nationality || !$candidate->gender || !$candidate->biography || !$candidate->profile_picture ||
                    !$candidate->marital_status || !$candidate->date_of_birth || !$candidate->phone ||
                    !$candidate->email || !$candidate->location) {

                    session()->flash('profile_incomplete', 'Please complete your profile.');
                }
            }
        }

        return $next($request);

    }
}
