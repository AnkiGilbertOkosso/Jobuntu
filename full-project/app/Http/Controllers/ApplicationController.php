<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobListing;
use Illuminate\Support\Facades\Auth;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    use FileUploadTrait;

    public function store(Request $request, JobListing $job)
    {
        $request->validate([
            'cover_letter' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = $this->handleFileUpload($request, 'resume', $request->old_image);


        $user = Auth::user();

        if ($user && $user->candidate) {
            $candidateId = $user->candidate->id;

            $application = new Application();
            $application->candidate_id = $candidateId;
            $application->job_id = $job->id;
            $application->application_date = now();
            $application->status = 'Applied';
            $application->cover_letter = $request->input('cover_letter');
            $application->resume_path = $resumePath;
            $application->save();
            notify()->success('Application submitted successfully. ⚡️');
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'You need to be logged in as a candidate to apply.');
    }
    public function candidateApplications()
    {
        $applications = Application::where('candidate_id', auth()->id())->with('job')->get();

        return view('applications.index', compact('applications'));
    }
}
