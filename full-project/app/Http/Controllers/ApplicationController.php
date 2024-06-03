<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobListing;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function store(Request $request, JobListing $job)
    {
        $request->validate([
            'cover_letter' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        Application::create([
            'job_id' => $job->id,
            'candidate_id' => auth()->id(),
            'application_date' => now(),
            'status' => 'Applied',
            'cover_letter' => $request->cover_letter,
            'resume_path' => $resumePath,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully.');
    }
    public function candidateApplications()
    {
        $applications = Application::where('candidate_id', auth()->id())->with('job')->get();

        return view('applications.index', compact('applications'));
    }
}
