@extends('layouts.employer.employer')

@section('content')
    <div class="pt-14">
        <div class="flex flex-col items-start justify-self-start mb-6 space-y-2">
            <h1 class="text-2xl font-semibold">Post a job</h1>
        </div>
        <div class="pt-8">
            <form method="POST" action="{{ route('jobs.store') }}">
                @csrf
                <!-- Job Title -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="jobTitle">Job Title</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="jobTitle" name="job_title" type="text" placeholder="Add job title, role, vacancies etc">
                </div>

                <!-- Tags -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tags">Tags</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="tagsInput" type="text"  placeholder="Job keyword, tags etc">
                    <div id="tagsContainer" class="mt-2"></div>
                    <input type="hidden" name="tags" id="hiddenTagsInput">
                </div>

                <!-- Job Role -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="jobRole">Job Role</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="jobRole" name="job_role">
                        <option>Select...</option>
                        <option>Software Engineer</option>
                        <option>Data Analyst</option>
                        <option>Project Manager</option>
                        <option>Marketing Specialist</option>
                        <option>Sales Representative</option>
                        <option>Customer Support</option>
                        <option>Human Resources</option>
                        <option>Product Manager</option>
                        <option>Graphic Designer</option>
                        <option>Financial Analyst</option>
                    </select>
                </div>

                <!-- Salary -->
                <div class="flex mb-4">
                    <div class="w-1/2 pr-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="minSalary">Min Salary</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="minSalary" type="text" name="min_salary" placeholder="Minimum salary">
                    </div>
                    <div class="w-1/2 pl-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="maxSalary">Max Salary</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="maxSalary" type="text" name="max_salary" placeholder="Maximum salary">
                    </div>
                </div>

                <!-- Salary Type -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="salaryType">Salary Type</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="salaryType" name="salary_type">
                        <option>Select...</option>
                        <option>Hourly</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                        <option>Yearly</option>
                    </select>
                </div>

                <!-- Advanced Information -->
                <h3 class="text-xl font-bold mb-4">Advance Information</h3>
                <div class="flex flex-wrap mb-4">
                    <div class="w-1/2 pr-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="education">Education</label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="education" name="education">
                            <option>Select...</option>
                            <option>High School Diploma</option>
                            <option>Associate Degree</option>
                            <option>Bachelor's Degree</option>
                            <option>Master's Degree</option>
                            <option>Doctorate</option>
                            <option>Vocational Training</option>
                            <option>Professional Certification</option>
                        </select>
                    </div>
                    <div class="w-1/2 pl-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="experience">Experience</label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="experience" name="experience">
                            <option>Select...</option>
                            <option>No Experience</option>
                            <option>1-2 Years</option>
                            <option>3-5 Years</option>
                            <option>6-8 Years</option>
                            <option>9+ Years</option>
                        </select>
                    </div>
                    <div class="w-1/2 pr-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="jobType">Job Type</label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="jobType" name="job_type">
                            <option>Select...</option>
                            <option>Full-Time</option>
                            <option>Part-Time</option>
                            <option>Contract</option>
                            <option>Internship</option>
                            <option>Temporary</option>
                            <option>Freelance</option>
                        </select>
                    </div>
                    <div class="w-1/2 pl-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="vacancies">Vacancies</label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="vacancies" name="vacancies">
                            <option>Select...</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5+</option>
                        </select>
                    </div>
                    <div class="w-1/2 pr-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="expirationDate">Expiration
                            Date</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="expirationDate" name="expiration_date" type="date">
                    </div>
                    <div class="w-1/2 pl-2 mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="jobLevel">Job Level</label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="jobLevel" name="job_level">
                            <option>Select...</option>
                            <option>Entry Level</option>
                            <option>Junior Level</option>
                            <option>Mid Level</option>
                            <option>Senior Level</option>
                            <option>Executive Level</option>
                        </select>
                    </div>
                </div>

                <!-- Location -->
                <h3 class="text-xl font-bold mb-4">Location</h3>
                <div class="flex mb-4">
                    <div class="w-1/2 pr-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="country">Country</label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="country" name="country">
                            <option>Select...</option>
                            <option value="United States">United States</option>
                            <option value="Canada">Canada</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Cameroon">Cameroon</option>
                        </select>
                    </div>
                    <div class="w-1/2 pl-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="city">City</label>
                        <select
                            class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                            id="city" name="city">
                            <option>Select...</option>
                        </select>
                    </div>
                </div>

                <!-- Remote Position -->
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="is_remote">
                        <span class="ml-2 text-gray-700">Fully Remote Position - Worldwide</span>
                    </label>
                </div>

                <!-- Job Benefits -->
                <h3 class="text-xl font-bold mb-4">Job Benefits</h3>
                <div class="flex flex-wrap mb-4">
                    <div class="w-full">
                        <div class="flex flex-wrap -m-1">
                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, '401k-salary')">401k Salary</button>
                            <input type="checkbox" name="job_benefits[]" value="401k Salary" id="401k-salary" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'distributed-team')">Distributed Team</button>
                            <input type="checkbox" name="job_benefits[]" value="Distributed Team" id="distributed-team" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'async')">Async</button>
                            <input type="checkbox" name="job_benefits[]" value="Async" id="async" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'vision-insurance')">Vision Insurance</button>
                            <input type="checkbox" name="job_benefits[]" value="Vision Insurance" id="vision-insurance" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'dental-insurance')">Dental Insurance</button>
                            <input type="checkbox" name="job_benefits[]" value="Dental Insurance" id="dental-insurance" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'medical-insurance')">Medical Insurance</button>
                            <input type="checkbox" name="job_benefits[]" value="Medical Insurance" id="medical-insurance" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'unlimited-vacation')">Unlimited vacation</button>
                            <input type="checkbox" name="job_benefits[]" value="Unlimited vacation" id="unlimited-vacation" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, '4-day-workweek')">4 day workweek</button>
                            <input type="checkbox" name="job_benefits[]" value="4 day workweek" id="4-day-workweek" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, '401k-matching')">401k matching</button>
                            <input type="checkbox" name="job_benefits[]" value="401k matching" id="401k-matching" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'company-retreats')">company retreats</button>
                            <input type="checkbox" name="job_benefits[]" value="company retreats" id="company-retreats" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'learning-budget')">Learning budget</button>
                            <input type="checkbox" name="job_benefits[]" value="Learning budget" id="learning-budget" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'free-gym-membership')">Free gym membership</button>
                            <input type="checkbox" name="job_benefits[]" value="Free gym membership" id="free-gym-membership" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'pay-in-crypto')">Pay in crypto</button>
                            <input type="checkbox" name="job_benefits[]" value="Pay in crypto" id="pay-in-crypto" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'profit-sharing')">Profit Sharing</button>
                            <input type="checkbox" name="job_benefits[]" value="Profit Sharing" id="profit-sharing" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'equity-compensation')">Equity Compensation</button>
                            <input type="checkbox" name="job_benefits[]" value="Equity Compensation" id="equity-compensation" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'no-whiteboard-interview')">No whiteboard interview</button>
                            <input type="checkbox" name="job_benefits[]" value="No whiteboard interview" id="no-whiteboard-interview" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'no-politics-at-work')">No politics at work</button>
                            <input type="checkbox" name="job_benefits[]" value="No politics at work" id="no-politics-at-work" class="hidden">

                            <button type="button"
                                class="m-1 bg-blue-100 text-primary text-sm font-semibold mr-2 px-2.5 py-0.5 rounded"
                                onclick="toggleSelection(this, 'we-hire-old-and-young')">We hire old (and young)</button>
                            <input type="checkbox" name="job_benefits[]" value="We hire old (and young)" id="we-hire-old-and-young" class="hidden">
                        </div>

                    </div>
                </div>

                <!-- Job Description -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="jobDescription">Job Description</label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32"
                        id="jobDescription" name="job_description" placeholder="Add your job description..."></textarea>
                </div>

                <!-- Post Job Button -->
                <div class=" pb-8 flex justify-end">
                    <button
                        class="bg-slate-300 hover:bg-primary text-primary  hover:text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Post Job
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
