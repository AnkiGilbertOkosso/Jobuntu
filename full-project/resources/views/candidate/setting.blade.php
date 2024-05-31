@extends('layouts.candidate.candidate')

@section('content')
    <div class="pt-14 flex flex-col items-start justify-self-start mb-6 space-y-2">
        <h1 class="text-2xl font-semibold">Setting</h1>
    </div>
    <div class="border-b border-gray-200">
        <ul class="flex justify-center">
            <li class="mr-4">
                <button
                    class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Candidate', 1)">Candidate</button>
            </li>
            <li class="mr-4">
                <button
                    class="tab-link text-gray-600 py-2 px-4 block hover:text-blue-500 focus:outline-none border-b-2 font-medium text-sm"
                    onclick="openTab(event, 'Employer', 2)">Employer</button>
            </li>
        </ul>
    </div>

    <div id="Candidate" class="tab-content active mt-8">
        <h3 class="font-semibold text-xl">Basic Information</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="flex flex-col space-y-3 col-span-1 items-start justify-center w-full">
                <label for="logo" class="block text-gray-700 font-semibold mb-2">Profile Picture</label>
                <label for="logo"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6"
                        id="dropzone-content">
                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                class="font-semibold">Click to upload</span>
                            or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                            800x400px)</p>
                    </div>
                    <input id="logo" name="logo" type="file" class="hidden"
                        accept="image/*" />
                    <img id="logo-preview" class="mt-3 hidden w-full h-64 object-cover rounded-lg" />
                </label>
            </div>
            <div class="col-span-2 grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block mb-2 text-sm text-gray-600">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')"
                        required autofocus autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block mb-2 text-sm text-gray-600">Title/Headline</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')"
                        required autofocus autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block mb-2 text-sm text-gray-600">Experience</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')"
                        required autofocus autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div>
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block mb-2 text-sm text-gray-600">Education</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')"
                        required autofocus autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
                <div class="col-span-2">
                    <input type="hidden" id="role" name="role" value="2">
                    <label for="name" class="block mb-2 text-sm text-gray-600">Personal Website</label>
                    <input type="text" id="name" name="name" placeholder="" :value="old('name')"
                        required autofocus autocomplete="name"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                </div>
            </div>
        </div>
    </div>

    <div id="Employer" class="tab-content mt-8">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <input type="hidden" id="role" name="role" value="2">
                <label for="name" class="block mb-2 text-sm text-gray-600">Company Name</label>
                <input type="text" id="name" name="name" placeholder="" :value="old('name')"
                    required autofocus autocomplete="name"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
            </div>
            <div class="mt-4">
                <label for="email" class="block mb-2 text-sm text-gray-600">Email
                    Address</label>
                <input type="email" id="email" name="email" placeholder="example@company.com" :value="old('email')"
                    required autocomplete="username"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            <div class="mt-4">
                <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                <input type="password" id="password" name="password" placeholder="Your Password" required
                    autocomplete="new-password"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
                <label for="password_confirmation" class="block mb-2 text-sm text-gray-600">Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    placeholder="Confirm Your Password" required autocomplete="new-password"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="mt-6">
                <button type="submit"
                    class="w-full px-4 py-2 text-white bg-primary rounded-md focus:bg-primary focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50 hover:bg-primary">Sign
                    Up</button>
            </div>
        </form>
    </div>
@endsection
