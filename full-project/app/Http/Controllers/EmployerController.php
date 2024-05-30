<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;

class EmployerController extends Controller
{
    public function dashboard()
    {
        $employer = Auth::user()->employer;

        return view('employer.dashboard', compact('employer'));
    }

    public function showCompleteProfileForm()
    {
        $employer = Auth::user()->employer;

        return view('employer.complete_profile', compact('employer'));
    }

    public function completeProfile(Request $request)
    {
        $request->validate([
            'logo' => 'required|image',
            'banner_image' => 'required|image',
            'about_us' => 'required|string',
            'organisation_type' => 'required|string',
            'industry_type' => 'required|string',
            'team_size' => 'required|string',
            'year_of_establishment' => 'required|integer',
            'company_website' => 'required|url',
            'facebook_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'contact_number' => 'required|string',
        ]);

        $employer = Auth::user()->employer;
        $employer->update([
            'logo' => $request->file('logo')->store('logos'),
            'banner_image' => $request->file('banner_image')->store('banner_images'),
            'about_us' => $request->about_us,
            'organisation_type' => $request->organisation_type,
            'industry_type' => $request->industry_type,
            'team_size' => $request->team_size,
            'year_of_establishment' => $request->year_of_establishment,
            'company_website' => $request->company_website,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'twitter_link' => $request->twitter_link,
            'contact_number' => $request->contact_number,
        ]);

        return redirect()->route('employer.dashboard')->with('success', 'Profile completed successfully.');
    }
}
