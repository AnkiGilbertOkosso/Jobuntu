<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jobuntu') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <script src="https://kit.fontawesome.com/91ebbc8982.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="container px-4 flex mx-auto items-center justify-between py-5">
        <div><a href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" alt /></a></div>
    </nav>

    <main class="container px-4 mx-auto items-center pt-12 justify-center">

        <div class="relative pt-1">
            <div class="pt-8 flex flex-col items-start justify-self-start mb-6 space-y-2">
                <h1 class="text-3xl font-semibold">Set Up Your Profile</h1>
            </div>
        </div>
        <form action="{{ route('candidate.saveProfileStep') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="font-semibold text-xl">Basic Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
                <div class="flex flex-col space-y-3 col-span-1 items-start justify-center w-full">
                    <label for="profile_picture" class="block text-gray-700 font-semibold mb-2">Profile Picture</label>
                    <label for="profile_picture"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600"
                        id="dropzone-label">
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
                        <input id="profile_picture" name="profile_picture" type="file" class="hidden" accept="image/*" />
                        <img id="picture-preview" src="" alt="Logo Preview"
                                    class="hidden h-full w-full object-contain">
                    </label>
                </div>
                <div class="col-span-2 grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">Full Name</label>
                        <input type="text" id="full_name" name="full_name" placeholder=""
                            value=""
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title/Headline</label>
                        <input type="text" id="title" name="title" placeholder=""
                            value=""
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label for="experience" class="block text-gray-700 text-sm font-bold mb-2">Experience</label>
                        <input type="text" id="experience" name="experience" placeholder=""
                            value=""
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div>
                        <label for="education" class="block text-gray-700 text-sm font-bold mb-2">Education</label>
                        <input type="text" id="education" name="education" placeholder=""
                            value=""
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                    <div class="col-span-2">
                        <label for="personal_website" class="block text-gray-700 text-sm font-bold mb-2">Personal Website</label>
                        <input type="text" id="personal_website" name="personal_website" placeholder=""
                            value=""
                            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>
                </div>
            </div>
            <hr>
            <h3 class="font-semibold text-xl my-8">Profile Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nationality">Nationality</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="nationality" name="nationality">
                        <option value="">Select...</option>
                        <option value="American">American</option>
                        <option value="Canadian">Canadian</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="date_of_birth">Date Of Birth</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="date_of_birth" name="date_of_birth" type="date" value="">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Gender</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="gender" name="gender">
                        <option value="">Select...</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="marital_status">Marital Status</label>
                    <select
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="marital_status" name="marital_status">
                        <option value="">Select...</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>
                <div class="md:col-span-2 mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Biography</label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32"
                        id="biography" name="biography" placeholder="Add your Biography..."></textarea>
                </div>
            </div>
            <hr>

            <h3 class="font-semibold text-xl my-8">Social Media Profile</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="social_links_linkedin" class="block text-gray-700 font-semibold mb-2">LinkedIn</label>
                    <input type="url" id="social_links_linkedin" name="social_links[linkedin]" value=""
                        class="w-full border border-gray-300 rounded-lg px-4 py-2" />
                </div>
                <div>
                    <label for="social_links_twitter" class="block text-gray-700 font-semibold mb-2">Twitter</label>
                    <input type="url" id="social_links_twitter" name="social_links[twitter]" value=""
                        class="w-full border border-gray-300 rounded-lg px-4 py-2" />
                </div>
                <div>
                    <label for="social_links_github" class="block text-gray-700 font-semibold mb-2">Github</label>
                    <input type="url" id="social_links_github" name="social_links[github]" value=""
                        class="w-full border border-gray-300 rounded-lg px-4 py-2" />
                </div>
                <div>
                    <label for="social_links_instagram" class="block text-gray-700 font-semibold mb-2">Instagram</label>
                    <input type="url" id="social_links_instagram" name="social_links[instagram]" value=""
                        class="w-full border border-gray-300 rounded-lg px-4 py-2" />
                </div>
            </div>
            <hr>
            <h3 class="font-semibold text-xl my-8">Contact Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8">
                <div>
                    <label for="location" class="block text-gray-700 font-semibold mb-2">Location</label>
                    <input type="text" id="location" name="location" placeholder=""
                        value=""
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder=""
                        value=""
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
                <div class="md:col-span-2">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder=""
                        value=""
                        class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                </div>
            </div>
            <hr>
            <div class="flex justify-end my-8">
                <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark">Submit</button>
            </div>
        </form>

    </main>

    {{-- <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script> --}}
    <script>
        document.getElementById('profile_picture').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('picture-preview');
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    document.getElementById('dropzone-content').classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('dropzone-label').addEventListener('click', function(event) {
            if (event.target.tagName !== 'INPUT') {
                document.getElementById('profile_picture').click();
            }
        });
    </script>

</body>

</html>
