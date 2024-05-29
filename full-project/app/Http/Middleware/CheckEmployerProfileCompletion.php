<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckEmployerProfileCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role_id == 2) {
            $employer = Auth::user()->employer;

            if (!$employer->logo || !$employer->banner_image || !$employer->about_us || !$employer->organisation_type ||
                !$employer->industry_type || !$employer->team_size || !$employer->year_of_establishment ||
                !$employer->company_website || !$employer->contact_number || !$employer->contact_email) {

                session()->flash('profile_incomplete', 'Please complete your profile.');
            }
        }
        return $next($request);
    }
}
