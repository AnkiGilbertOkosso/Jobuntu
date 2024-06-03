<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckEmployerProfileCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 2) {
            $employer = Auth::user()->employer;


            if (!$employer) {
                session()->flash('profile_incomplete', 'Please complete your profile.');
            } else {
                if (
                    !$employer->logo || !$employer->banner_image || !$employer->about_us ||
                    !$employer->organization_type || !$employer->industry_types ||
                    !$employer->team_size || !$employer->year_of_establishment ||
                    !$employer->company_website || !$employer->phone
                ) {
                    session()->flash('profile_incomplete', 'Please complete your profile.');
                }
            }
        }
        return $next($request);
    }
}
