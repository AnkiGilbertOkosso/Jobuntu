<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function dashboard()
    {
        $candidate = Auth::user()->candidate;

        return view('candidate.dashboard', compact('candidate'));
    }
    public function showCompleteProfileForm()
    {
        $candidate = Auth::user()->candidate;

        return view('candidate.complete_profile', compact('candidate'));
    }

    public function saveProfileStep(Request $request)
    {
        $user = Auth::user();
        $candidate = $user->candidate;

        // Validate and save the current step data
        $request->validate([
            'resume' => 'nullable|mimes:pdf,doc,docx|max:5120',
            'skills' => 'required|string',
            'experience' => 'required|string',
            'education' => 'required|string',
            'nationality' => 'required|string',
            'gender' => 'required|string',
            'biography' => 'required|string',
            'profile_picture' => 'nullable|image|max:5120',
            'marital_status' => 'required|string',
            'date_of_birth' => 'required|date',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'contact_number' => 'required|string|max:20',
            'location' => 'required|string',
        ]);

        // Save the uploaded files if any
        if ($request->hasFile('resume')) {
            $candidate->resume = $request->file('resume')->store('resumes', 'public');
        }
        if ($request->hasFile('profile_picture')) {
            $candidate->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        // Save the rest of the data
        $candidate->update([
            'skills' => $request->skills,
            'experience' => $request->experience,
            'education' => $request->education,
            'nationality' => $request->nationality,
            'gender' => $request->gender,
            'biography' => $request->biography,
            'marital_status' => $request->marital_status,
            'date_of_birth' => $request->date_of_birth,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'contact_number' => $request->contact_number,
            'location' => $request->location,
        ]);

        // Redirect to the next step or to the dashboard
        return redirect()->route('candidate.dashboard')->with('success', 'Profile completed successfully.');
    }
}
