<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = JobListing::orderBy("created_at","desc")->paginate(10);
        return view("home", compact("jobs"));
    }
}
