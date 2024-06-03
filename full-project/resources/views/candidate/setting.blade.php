@extends('layouts.candidate.candidate')

@section('content')
    <div class="pt-14 flex flex-col items-start justify-self-start mb-6 space-y-2">
        <h1 class="text-2xl font-semibold">Setting</h1>
    </div>
    <div class="border-b border-gray-200">
        <ul class="flex justify-center">
            <li class="mr-4">
                <button
                    class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm active"
                    onclick="openTab(event, 'Personal')">Personal</button>
            </li>
            <li class="mr-4">
                <button
                    class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Profile')">Profile</button>
            </li>
            <li class="mr-4">
                <button
                    class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Social')">Social Links</button>
            </li>
            <li class="mr-4">
                <button
                    class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Contact')">Contact</button>
            </li>
        </ul>
    </div>

    <div id="Personal" class="tab-content active my-8">
        <form action="{{ route('candidate.updateProfileStep') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h3 class="font-semibold text-xl">Basic Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div class="flex flex-col space-y-3 col-span-1 items-start justify-center w-full">
                    <label for="profile_picture" class="block text-gray-700 font-semibold mb-2">Profile Picture</label>
                    <label for="profile_picture"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600"
                        id="dropzone-label">
                        <div class="hidden flex-col items-center justify-center pt-5 pb-6" id="dropzone-content">
                            <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="profile_picture" name="profile_picture" type="file" class="hidden" accept="image/*" />
                        <img id="picture-preview" src="{{ asset($candidate->profile_picture ?? '') }}" alt="Logo Preview"
                                    class=" h-full w-full object-contain">
                    </label>
                </div>
                <div class="col-span-2 grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                        <input type="text" id="full_name" name="full_name" placeholder=""
                            value="{{ old('full_name', $candidate->full_name ?? '') }}"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title/Headline</label>
                        <input type="text" id="title" name="title" placeholder=""
                            value="{{ old('title', $candidate->title ?? '') }}"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label for="experience" class="block text-gray-700 text-sm font-bold mb-2">Experience</label>
                        <input type="text" id="experience" name="experience" placeholder=""
                            value="{{ old('experience', $candidate->experience ?? '') }}"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label for="education" class="block text-gray-700 text-sm font-bold mb-2">Education</label>
                        <input type="text" id="education" name="education" placeholder=""
                            value="{{ old('education', $candidate->education ?? '') }}"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div class="col-span-2">
                        <label for="personal_website" class="block text-gray-700 text-sm font-bold mb-2">Personal
                            Website</label>
                        <input type="text" id="personal_website" name="personal_website" placeholder=""
                            value="{{ old('personal_website', $candidate->personal_website ?? '') }}"
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                </div>
            </div>
            <div class="items-center justify-end flex mt-4">
                <button type="submit"
                    class="w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Update</button>
            </div>
        </form>
    </div>

    <div id="Profile" class="tab-content hidden my-8">
        <form action="{{ route('candidate.updateProfileStep') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nationality">Nationality</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="nationality" name="nationality">
                        <option value="">Select...</option>
                        <option value="American"
                            {{ old('nationality', $candidate->nationality) == 'American' ? 'selected' : '' }}>American
                        </option>
                        <option value="Canadian"
                            {{ old('nationality', $candidate->nationality) == 'Canadian' ? 'selected' : '' }}>Canadian
                        </option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="date_of_birth">Date Of Birth</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="date_of_birth" name="date_of_birth" type="date"
                        value="{{ old('date_of_birth', $candidate->date_of_birth ?? '') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Gender</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="gender" name="gender">
                        <option value="">Select...</option>
                        <option value="Male" {{ old('gender', $candidate->gender) == 'Male' ? 'selected' : '' }}>Male
                        </option>
                        <option value="Female" {{ old('gender', $candidate->gender) == 'Female' ? 'selected' : '' }}>
                            Female</option>
                        <option value="Other" {{ old('gender', $candidate->gender) == 'Other' ? 'selected' : '' }}>Other
                        </option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="marital_status">Marital Status</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="marital_status" name="marital_status">
                        <option value="">Select...</option>
                        <option value="Single"
                            {{ old('marital_status', $candidate->marital_status) == 'Single' ? 'selected' : '' }}>Single
                        </option>
                        <option value="Married"
                            {{ old('marital_status', $candidate->marital_status) == 'Married' ? 'selected' : '' }}>Married
                        </option>
                        <option value="Divorced"
                            {{ old('marital_status', $candidate->marital_status) == 'Divorced' ? 'selected' : '' }}>
                            Divorced</option>
                        <option value="Widowed"
                            {{ old('marital_status', $candidate->marital_status) == 'Widowed' ? 'selected' : '' }}>Widowed
                        </option>
                    </select>
                </div>
                <div class="md:col-span-2 mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Biography</label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32"
                        id="biography" name="biography" placeholder="Add your Biography...">{{ old('biography', $candidate->biography ?? '') }}</textarea>
                </div>
            </div>
            <div class="items-center justify-end flex mt-4">
                <button type="submit"
                    class="w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Update</button>
            </div>
        </form>
    </div>

    <div id="Social" class="tab-content hidden my-8">
        <form action="{{ route('candidate.updateProfileStep') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h2 class="text-2xl font-semibold mb-6">Social Media Profile</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="social_links_linkedin" class="block text-gray-700 font-semibold mb-2">LinkedIn</label>
                    <input type="url" id="social_links_linkedin" name="social_links[linkedin]"
                        value="{{ old('social_links.linkedin', $candidate->social_links['linkedin'] ?? '') }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div>
                    <label for="social_links_facebook" class="block text-gray-700 font-semibold mb-2">Facebook</label>
                    <input type="url" id="social_links_facebook" name="social_links[facebook]"
                        value="{{ old('social_links.facebook', $candidate->social_links['facebook'] ?? '') }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="social_links_instagram" class="block text-gray-700 font-semibold mb-2">Instagram</label>
                    <input type="url" id="social_links_instagram" name="social_links[instagram]"
                        value="{{ old('social_links.instagram', $candidate->social_links['instagram'] ?? '') }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div>
                    <label for="social_links_twitter" class="block text-gray-700 font-semibold mb-2">Twitter</label>
                    <input type="url" id="social_links_twitter" name="social_links[twitter]"
                        value="{{ old('social_links.twitter', $candidate->social_links['twitter'] ?? '') }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
            </div>
            <div class="items-center justify-end flex mt-4">
                <button type="submit"
                    class="w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Update</button>
            </div>
        </form>
    </div>

    <div id="Contact" class="tab-content hidden my-8">
        <form action="{{ route('candidate.updateProfileStep') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h2 class="text-2xl font-semibold mb-6">Contact</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="location" class="block text-gray-700 font-semibold mb-2">Location</label>
                    <input type="text" id="location" name="location"
                        value="{{ old('location', $candidate->location ?? '') }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                    <input type="text" id="phone" name="phone"
                        value="{{ old('phone', $candidate->phone ?? '') }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        value="{{ old('email', $candidate->email ?? '') }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
            </div>
            <div class="items-center justify-end flex mt-4">
                <button type="submit"
                    class="w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Save</button>
            </div>
        </form>
    </div>
@endsection
