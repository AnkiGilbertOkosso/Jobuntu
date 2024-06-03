<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function dashboard()
    {
        $candidate = Auth::user()->candidate;

        return view('candidate.dashboard', compact('candidate'));
    }

    public function setting()
    {
        $candidate = Auth::user()->candidate;

        return view('candidate.setting', compact('candidate'));
    }
    public function showCompleteProfileForm()
    {
        $candidate = Auth::user()->candidate;

        return view('candidate.complete_profile', compact('candidate'));
    }

    public function saveProfileStep(Request $request)
    {
        $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'full_name' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'resume' => 'nullable|string',
            'skills' => 'nullable|string',
            'experience' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'biography' => 'nullable|string',
            'marital_status' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'personal_website' => 'nullable|url|max:255',
            'social_links.*' => 'nullable|url|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255|unique:candidates,email,' . Auth::id(), // unique except for the current candidate
            'location' => 'nullable|string|max:255',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Check if the user has a candidate profile, otherwise create a new one
        $candidate = $user->candidate ?? new Candidate();

        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $candidate->profile_picture = $profilePicturePath;
        }

        // Update candidate profile with the request data
        $candidate->full_name = $request->input('full_name');
        $candidate->title = $request->input('title');
        $candidate->resume = $request->input('resume');
        $candidate->skills = $request->input('skills');
        $candidate->experience = $request->input('experience');
        $candidate->education = $request->input('education');
        $candidate->nationality = $request->input('nationality');
        $candidate->gender = $request->input('gender');
        $candidate->biography = $request->input('biography');
        $candidate->marital_status = $request->input('marital_status');
        $candidate->date_of_birth = $request->input('date_of_birth');
        $candidate->personal_website = $request->input('personal_website');
        $candidate->social_link = json_encode($request->input('social_links'));
        $candidate->phone = $request->input('phone');
        $candidate->email = $request->input('email');
        $candidate->location = $request->input('location');

        // Associate the candidate with the user
        $candidate->user()->associate($user);

        // Save the candidate profile
        $candidate->save();

        return redirect()->back()->with('success', 'Profile completed successfully.');
    }
}
