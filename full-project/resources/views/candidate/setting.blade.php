@extends('layouts.candidate.candidate')

@section('content')
    <div class="pt-14 flex flex-col items-start justify-self-start mb-6 space-y-2">
        <h1 class="text-2xl font-semibold">Setting</h1>
    </div>
    <div class="border-b border-gray-200">
        <ul class="flex justify-center">
            <li class="mr-4">
                <button class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Personal')">Personal</button>
            </li>
            <li class="mr-4">
                <button class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Profile')">Profile</button>
            </li>
            <li class="mr-4">
                <button class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Social')">Social Links</button>
            </li>
            <li class="mr-4">
                <button class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Contact')">Contact</button>
            </li>
        </ul>
    </div>

    <div id="Personal" class="tab-content active my-8">
        <h3 class="font-semibold text-xl">Basic Information</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="flex flex-col space-y-3 col-span-1 items-start justify-center w-full">
                <label for="logo" class="block text-gray-700 font-semibold mb-2">Profile Picture</label>
                <label for="logo"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6" id="dropzone-content">
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
                    <input id="logo" name="logo" type="file" class="hidden" accept="image/*" />
                    <img id="logo-preview" class="mt-3 hidden w-full h-64 object-cover rounded-lg" />
                </label>
            </div>
            <div class="col-span-2 grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')" required autofocus
                        autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Title/Headline</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')" required autofocus
                        autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Experience</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')" required autofocus
                        autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Education</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')" required autofocus
                        autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div class="col-span-2">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Personal Website</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')" required autofocus
                        autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
            </div>
        </div>
        <div class="items-center justify-end flex">
            <button type="button"
                class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Save</button>
        </div>
    </div>

    <div id="Profile" class="tab-content hidden my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nationality">Nationality</label>
                <select
                    class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    id="nationality" name="nationality">
                    <option>Select...</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="dateOfBirth">Date Of Birth</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="dateOfBirth" name="date_of_birth" type="date">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Gender</label>
                <select
                    class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    id="gender" name="gender">
                    <option>Select...</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="marital_status">Marital Status</label>
                <select
                    class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    id="marital_status" name="marital_status">
                    <option>Select...</option>
                </select>
            </div>
            <div class="col-span-2">
                <label for="biography" class="block text-gray-700 text-sm font-bold mb-2">Biography</label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32"
                    id="biography" name="biography" placeholder="Add your Biography..."></textarea>
            </div>
        </div>
        <div class="items-center justify-end flex">
            <button type="button"
                class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Save</button>
        </div>
    </div>

    <div id="Social" class="tab-content hidden my-8">
        <h2 class="text-2xl font-semibold mb-6">Social Media Profile</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="social_links[linkedin]" class="block text-gray-700 font-semibold mb-2">LinkedIn</label>
                <input type="url" id="social_links_linkedin" name="social_links[linkedin]" value=""
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
            </div>
            <div>
                <label for="social_links[facebook]" class="block text-gray-700 font-semibold mb-2">Facebook</label>
                <input type="url" id="social_links_facebook" name="social_links[facebook]" value=""
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="social_links[instagram]" class="block text-gray-700 font-semibold mb-2">Instagram</label>
                <input type="url" id="social_links_instagram" name="social_links[instagram]" value=""
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
            </div>
            <div>
                <label for="social_links[twitter]" class="block text-gray-700 font-semibold mb-2">Twitter</label>
                <input type="url" id="social_links_twitter" name="social_links[twitter]" value=""
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
            </div>
        </div>
        <div class="items-center justify-end flex">
            <button type="button"
                class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Save</button>
        </div>
    </div>

    <div id="Contact" class="tab-content hidden my-8">
        <h2 class="text-2xl font-semibold mb-6">Contact</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="map_location" class="block text-gray-700 font-semibold mb-2">
                    Location</label>
                <input type="text" id="map_location" name="map_location" value=""
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
            </div>
            <div>
                <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                <input type="mo" id="phone" name="phone" value=""
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" value=""
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
            </div>
        </div>
        <div class="items-center justify-end flex">
            <button type="button"
                class="action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Save</button>
        </div>
    </div>
@endsection
