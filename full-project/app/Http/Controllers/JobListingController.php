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
        $jobs = JobListing::orderBy("created_at", "desc")->paginate(10);
        return view("jobs.list", compact("jobs"));
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
        $user = Auth::user();

        if ($user && $user->employer) {
            $employerId = $user->employer->id;

            $minSalary = $request->input('min_salary');
            $maxSalary = $request->input('max_salary');

            if ($maxSalary !== null && $minSalary !== null && $maxSalary < $minSalary) {
                return response()->json(['message' => 'Max salary must be greater than or equal to min salary'], 422);
            }

            $expirationDate = $request->input('expiration_date');

            if (strtotime($expirationDate) <= strtotime('today')) {
                return response()->json(['message' => 'Expiration date must be in the future'], 422);
            }

            $jobListing = new JobListing();
            $jobListing->employer_id = $employerId;
            $jobListing->job_title = $request->input('job_title');
            $jobListing->tags = $request->input('tags') ? json_encode(explode(',', $request->input('tags'))) : json_encode([]);
            $jobListing->job_role = $request->input('job_role');
            $jobListing->min_salary = $minSalary;
            $jobListing->max_salary = $maxSalary;
            $jobListing->salary_type = $request->input('salary_type');
            $jobListing->education = $request->input('education');
            $jobListing->experience = $request->input('experience');
            $jobListing->job_type = $request->input('job_type');
            $jobListing->vacancies = $request->input('vacancies');
            $jobListing->expiration_date = $expirationDate;
            $jobListing->job_level = $request->input('job_level');
            $jobListing->country = $request->input('country');
            $jobListing->city = $request->input('city');
            $jobListing->is_remote = $request->input('is_remote', false);
            $jobListing->job_description = $request->input('job_description');
            $jobListing->job_benefits = $request->input('job_benefits') ? json_encode($request->input('job_benefits')) : json_encode([]);
            $jobListing->save();

            return redirect()->back()->with('success', 'Job listing created successfully!');
        }
        return redirect()->back()->with('error', 'You need to be logged in as a Employer to post.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = JobListing::findOrFail($id);
        return view('jobs.show', compact('job'));
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
