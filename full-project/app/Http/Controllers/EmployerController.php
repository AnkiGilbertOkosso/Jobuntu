<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;
use App\Models\JobListing;
use App\Traits\FileUploadTrait;

class EmployerController extends Controller
{
    use FileUploadTrait;
    public function dashboard()
    {
        $employer = Auth::user()->employer;



        return view('employer.dashboard', compact('employer'));
    }

    public function profile()
    {
        $employer = Auth::user()->employer;



        return view('employer.profile', compact('employer'));
    }
    public function jobs()
    {
        $employer = Auth::user()->employer;
        $jobs = JobListing::where('employer_id', $employer->id)->get();
        return view('employer.list', compact('jobs'));
    }

    public function showCompleteProfileForm()
    {
        $employer = Auth::user()->employer;


        return view('employer.complete_profile', compact('employer'));
    }

    public function setting()
    {
        $employer = Auth::user()->employer;


        return view('employer.setting', compact('employer'));
    }

    public function completeProfile(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_name' => 'required|string|max:255',
            'about_us' => 'required|string|max:2000',
            'organization_type' => 'required|string|max:255',
            'industry_types' => 'required|string|max:255',
            'team_size' => 'required|string|max:255',
            'year_of_establishment' => 'required|date_format:Y-m-d',
            'company_website' => 'nullable|url|max:255',
            'social_links.*' => 'nullable|url|max:255',
            'map_location' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255',
        ]);


        $user = Auth::user();

        if ($user->role != 2) {
            return redirect()->back()->withErrors(['msg' => 'Unauthorized action.']);
        }

        $employer = $user->employer ?? new Employer();

        $logoPath = $this->handleFileUpload($request, 'logo', $request->old_image);
        $bannerImagePath = $this->handleFileUpload($request, 'banner_image', $request->old_image);

        $employer->banner_image = $bannerImagePath;
        $employer->logo = $logoPath;
        $employer->company_name = $request->input('company_name');
        $employer->about_us = $request->input('about_us');
        $employer->organization_type = $request->input('organization_type');
        $employer->industry_types = $request->input('industry_types');
        $employer->team_size = $request->input('team_size');
        $employer->year_of_establishment = $request->input('year_of_establishment');
        $employer->company_website = $request->input('company_website');
        $employer->social_links = json_encode($request->input('social_links'));
        $employer->map_location = $request->input('map_location');
        $employer->phone = $request->input('phone');
        $employer->email = $request->input('email');

        $employer->user()->associate($user);

        $employer->save();

        return redirect()->route('employer.dashboard')->with('success', 'Profile completed successfully.');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'company_name' => 'nullable|string|max:255',
            'about_us' => 'nullable|string|max:2000',
            'organization_type' => 'nullable|string|max:255',
            'industry_types' => 'nullable|string|max:255',
            'team_size' => 'nullable|string|max:255',
            'year_of_establishment' => 'nullable|date_format:Y-m-d',
            'company_website' => 'nullable|url|max:255',
            'social_links.*' => 'nullable|url|max:255',
            'map_location' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255',
        ]);

        $user = Auth::user();

        if ($user->role != 2) {
            return redirect()->back()->withErrors(['msg' => 'Unauthorized action.']);
        }

        $employer = $user->employer;

        if (!$employer) {
            return redirect()->back()->withErrors(['msg' => 'Employer profile not found.']);
        }

        if ($request->hasFile('logo')) {
            $logoPath = $this->handleFileUpload($request, 'logo', $employer->logo);
            $employer->logo = $logoPath;
        }

        if ($request->hasFile('banner_image')) {
            $bannerImagePath = $this->handleFileUpload($request, 'banner_image', $employer->banner_image);
            $employer->banner_image = $bannerImagePath;
        }

        $employer->company_name = $request->input('company_name');
        $employer->about_us = $request->input('about_us');
        $employer->organization_type = $request->input('organization_type');
        $employer->industry_types = $request->input('industry_types');
        $employer->team_size = $request->input('team_size');
        $employer->year_of_establishment = $request->input('year_of_establishment');
        $employer->company_website = $request->input('company_website');
        $employer->social_links = json_encode($request->input('social_links'));
        $employer->map_location = $request->input('map_location');
        $employer->phone = $request->input('phone');
        $employer->email = $request->input('email');

        $employer->update();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
