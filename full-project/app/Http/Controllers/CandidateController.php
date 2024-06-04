<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\JobListing;
use Illuminate\Support\Facades\Auth;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    use FileUploadTrait;

    public function dashboard()
    {
        $candidate = Auth::user()->candidate;
        $jobs = JobListing::all();

        return view('candidate.dashboard', compact('candidate', 'jobs'));
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

        $user = Auth::user();
        if ($user->role != 1) {
            return redirect()->back()->withErrors(['msg' => 'Unauthorized action.']);
        }
        $candidate = $user->candidate ?? new Candidate();


        $profilePicturePath = $this->handleFileUpload($request, 'profile_picture', $request->old_image);

        $candidate->profile_picture = $profilePicturePath;
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

        $candidate->user()->associate($user);

        $candidate->save();

        return redirect()->route('candidate.dashboard')->with('success', 'Profile completed successfully.');
    }

    public function updateProfile(Request $request)
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
            'email' => 'required|string|email|max:255|unique:candidates,email,' . Auth::user()->candidate->id,
            'location' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        if ($user->role != 1) {
            return redirect()->back()->withErrors(['msg' => 'Unauthorized action.']);
        }

        $candidate = $user->candidate;
        if (!$candidate) {
            return redirect()->back()->withErrors(['msg' => 'Candidate profile not found.']);
        }

        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $this->handleFileUpload($request, 'profile_picture', $candidate->profile_picture);
            $candidate->profile_picture = $profilePicturePath;
        }

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

        $candidate->update();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
