<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if (!$user || $user->role !== 2) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $employer = Employer::where('user_id', $user->id)->first();
        if (!$employer) {
            return response()->json(['message' => 'Employer not found'], 404);
        }

        $request->validate([
            'job_title' => 'required|string|max:255',
            'tags' => 'nullable|string',
            'job_role' => 'required|string|max:255',
            'min_salary' => 'nullable|numeric|min:0',
            'max_salary' => 'nullable|numeric|min:0',
            'salary_type' => 'required|string|in:hourly,daily,weekly,monthly,yearly',
            'education' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'job_type' => 'required|string|max:255',
            'vacancies' => 'required|integer|min:1',
            'expiration_date' => 'required|date|after:today',
            'job_level' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'is_remote' => 'boolean',
            'job_description' => 'required|string',
            'job_benefits' => 'nullable|array'
        ]);

        $jobListing = new JobListing();
        $jobListing->employer_id = $employer->id;
        $jobListing->job_title = $request->input('job_title');
        $jobListing->tags = $request->input('tags') ? json_encode(explode(',', $request->input('tags'))) : json_encode([]);
        $jobListing->job_role = $request->input('job_role');
        $jobListing->min_salary = $request->input('min_salary');
        $jobListing->max_salary = $request->input('max_salary');
        $jobListing->salary_type = $request->input('salary_type');
        $jobListing->education = $request->input('education');
        $jobListing->experience = $request->input('experience');
        $jobListing->job_type = $request->input('job_type');
        $jobListing->vacancies = $request->input('vacancies');
        $jobListing->expiration_date = $request->input('expiration_date');
        $jobListing->job_level = $request->input('job_level');
        $jobListing->country = $request->input('country');
        $jobListing->city = $request->input('city');
        $jobListing->is_remote = $request->input('is_remote', false);
        $jobListing->job_description = $request->input('job_description');
        $jobListing->job_benefits = $request->input('job_benefits') ? json_encode($request->input('job_benefits')) : json_encode([]);
        $jobListing->save();

        return redirect()->route('employer.dashboard')->with('message', 'Job listing created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
