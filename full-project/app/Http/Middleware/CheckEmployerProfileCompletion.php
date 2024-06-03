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
                // Logging the values to debug
                Log::info('Employer profile check', [
                    'logo' => $employer->logo,
                    'banner_image' => $employer->banner_image,
                    'about_us' => $employer->about_us,
                    'organisation_type' => $employer->organization_type,
                    'industry_type' => $employer->industry_types,
                    'team_size' => $employer->team_size,
                    'year_of_establishment' => $employer->year_of_establishment,
                    'company_website' => $employer->company_website,
                    'phone' => $employer->phone,
                ]);
            }

            if (
                !$employer->logo || !$employer->banner_image || !$employer->about_us ||
                !$employer->organization_type || !$employer->industry_types ||
                !$employer->team_size || !$employer->year_of_establishment ||
                !$employer->company_website || !$employer->phone
            ) {
                session()->flash('profile_incomplete', 'Please complete your profile.');
            }
        }
        return $next($request);
    }
}
