@extends('layouts.employer.employer')

@section('content')
<div class="pt-14">
    <div class="mb-4">
        <!-- Tab Navigation -->
        <div class="hidden md:flex justify-between items-center mb-4 border-b-2 border-gray-200">
            <button id="tab1" class="tab text-primary mr-2 border-b-2 border-primary py-2">Company Info</button>
            <button id="tab2" class="tab text-gray-400 py-2">Founding Info</button>
            <button id="tab3" class="tab text-gray-400 py-2">Social Media Profile</button>
            <button id="tab4" class="tab text-gray-400 py-2">Contact</button>
        </div>
    </div>

    <form method="POST" action="{{ route('employer.profile.update', $employer->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Tab Contents -->
        <div id="tab1Content" class="tab-content">
            <div class="py-12 w-full">
                <h2 class="text-2xl font-semibold mb-6">Logo & Banner Image</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <!-- Logo Upload -->
                    <div class="flex flex-col space-y-3 col-span-1 items-start justify-center w-full">
                        <label for="logo" class="block text-gray-700 font-semibold mb-2">Upload Logo</label>
                        <label for="logo"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600"
                            id="dropzone-label">
                            <div class="hidden flex-col items-center justify-center pt-5 pb-6" id="dropzone-content">
                                <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                        to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                                </p>
                            </div>
                            <input id="logo" name="logo" type="file" class="hidden" accept="image/*" />
                            <img id="logo-preview" src="{{ old('logo', asset($employer->logo)) }}" alt="Logo Preview"
                                class=" h-full w-full object-contain">
                        </label>
                    </div>
                    <!-- Banner Image Upload -->
                    <div class="flex flex-col col-span-2 items-start space-y-3 justify-center w-full">
                        <label for="banner_image" class="block text-gray-700 font-semibold mb-2">Banner Image</label>
                        <label for="banner_image" id="banner-label"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600">
                            <div class=" flex-col items-center hidden justify-center pt-5 pb-6" id="banner-content">
                                <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                        to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                                </p>
                            </div>
                            <input id="banner_image" name="banner_image" type="file" class="hidden" accept="image/*" />
                            <img id="banner-preview" src="{{ old('banner_image', asset($employer->banner_image)) }}"
                                alt="Banner Preview" class="mt-3 w-full h-64 object-contain rounded-lg" />
                        </label>
                    </div>
                </div>
                <h2 class="text-2xl font-semibold mb-6">Company Info</h2>
                <div class="grid grid-cols-1 space-y-4 mb-6">
                    <div>
                        <label for="company_name" class="block text-gray-700 font-semibold mb-2">Company Name</label>
                        <input type="text" id="company_name" name="company_name"
                            value="{{ old('company_name', $employer->company_name) }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    <div>
                        <label for="about_us" class="block text-gray-700 font-semibold mb-2">About Us</label>
                        <textarea id="about_us" name="about_us"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">{{ old('about_us', $employer->about_us) }}</textarea>
                    </div>
                </div>
                <div class="items-end justify-end flex">
                    <button type="submit"
                        class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Update</button>
                </div>
            </div>
        </div>

        <div id="tab2Content" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="organization_type" class="block text-gray-700 font-semibold mb-2">Organization Type</label>
                    <input type="text" id="organization_type" name="organization_type"
                        value="{{ old('organization_type', $employer->organization_type) }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div>
                    <label for="industry_types" class="block text-gray-700 font-semibold mb-2">Industry Type</label>
                    <input type="text" id="industry_types" name="industry_types"
                        value="{{ old('industry_types', $employer->industry_types) }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div>
                    <label for="team_size" class="block text-gray-700 font-semibold mb-2">Team Size</label>
                    <input type="text" id="team_size" name="team_size"
                        value="{{ old('team_size', $employer->team_size) }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div>
                    <label for="year_of_establishment" class="block text-gray-700 font-semibold mb-2">Year of
                        Establishment</label>
                    <input type="date" id="year_of_establishment" name="year_of_establishment"
                        value="{{ old('year_of_establishment', $employer->year_of_establishment) }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="company_website" class="block text-gray-700 font-semibold mb-2">Company Website</label>
                    <input type="url" id="company_website" name="company_website"
                        value="{{ old('company_website', $employer->company_website) }}"
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
            </div>
            <div class="items-end justify-end flex">
                <button type="submit"
                    class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Update</button>
            </div>
        </div>

        <div id="tab3Content" class="tab-content hidden">
            <div class="py-12 w-full">
                @php
                    $socialLinks = json_decode($employer->social_links, true) ?? [];
                @endphp
                <h2 class="text-2xl font-semibold mb-6">Social Media Profile</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="social_links[linkedin]"
                            class="block text-gray-700 font-semibold mb-2">LinkedIn</label>
                        <input type="url" id="social_links_linkedin" name="social_links[linkedin]"
                            value="{{ old('social_links.linkedin', $socialLinks['linkedin'] ?? '') }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    <div>
                        <label for="social_links[facebook]"
                            class="block text-gray-700 font-semibold mb-2">Facebook</label>
                        <input type="url" id="social_links_facebook" name="social_links[facebook]"
                            value="{{ old('social_links.facebook', $socialLinks['facebook'] ?? '') }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="social_links[instagram]"
                            class="block text-gray-700 font-semibold mb-2">Instagram</label>
                        <input type="url" id="social_links_instagram" name="social_links[instagram]"
                            value="{{ old('social_links.instagram', $socialLinks['instagram'] ?? '') }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    <div>
                        <label for="social_links[twitter]" class="block text-gray-700 font-semibold mb-2">Twitter</label>
                        <input type="url" id="social_links_twitter" name="social_links[twitter]"
                            value="{{ old('social_links.twitter', $socialLinks['twitter'] ?? '') }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                </div>
                <div class="items-end justify-end flex">
                    <button type="submit"
                        class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Update</button>
                </div>
            </div>
        </div>

        <div id="tab4Content" class="tab-content hidden">
            <div class="py-12 w-full">
                <h2 class="text-2xl font-semibold mb-6">Contact</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="map_location" class="block text-gray-700 font-semibold mb-2">Location</label>
                        <input type="text" id="map_location" name="map_location"
                            value="{{ old('map_location', $employer->map_location) }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                        <input type="mo" id="phone" name="phone"
                            value="{{ old('phone', $employer->phone) }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email"
                            value="{{ old('email', $employer->email) }}"
                            class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                    </div>
                </div>
                <div class="items-end justify-end flex">
                    <button type="submit"
                        class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
