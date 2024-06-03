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
        <div class="w-1/4 items center flex flex-col space-y-3">
            <p class="text-sm hidden md:block">Setup Progress</p>
            <div id="setupProgress" class="progress overflow-hidden bg-blue-50 h-1.5 rounded-full w-full">
                <span id="setupProgressBar" class="h-full bg-primary w-0 block rounded-full" role="progressbar"
                    aria-valuemin="0" aria-valuemax="100"></span>
            </div>
        </div>
    </nav>

    <main class="container px-4 mx-auto items-center pt-12 md:pt-24 justify-center">

        <form id="msform" action="{{ route('employer.completeProfile') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="items-center justify-center mx-auto md:px-40">
                <div class="hidden md:flex justify-between items-center mb-4">
                    <!-- Step Indicators -->
                    <div id="step1Indicator" class="flex items-center">
                        <span class="text-primary mr-2"><i class="fas fa-user"></i></span>
                        <span class="text-primary">Company Info</span>
                    </div>
                    <div id="step2Indicator" class="flex items-center text-gray-400">
                        <span class="mr-2"><i class="fas fa-info-circle"></i></span>
                        <span>Founding Info</span>
                    </div>
                    <div id="step3Indicator" class="flex items-center text-gray-400">
                        <span class="mr-2"><i class="fas fa-globe"></i></span>
                        <span>Social Media Profile</span>
                    </div>
                    <div id="step4Indicator" class="flex items-center text-gray-400">
                        <span class="mr-2"><i class="fas fa-phone"></i></span>
                        <span>Contact</span>
                    </div>
                </div>
                <div class="hidden md:flex relative h-1 bg-gray-200">
                    <div id="stepProgressBar" class="absolute top-0 h-1 bg-primary w-0"></div>
                </div>
                <fieldset class="step">
                    <div class="py-12 w-full">
                        <h2 class="text-2xl font-semibold mb-6">Logo & Banner Image</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <!-- Logo Upload -->
                            <div class="flex flex-col space-y-3 col-span-1 items-start justify-center w-full">
                                <label for="logo" class="block text-gray-700 font-semibold mb-2">Upload Logo</label>
                                <label for="logo"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600"
                                    id="dropzone-label">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6"
                                        id="dropzone-content">
                                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                            800x400px)</p>

                                    </div>
                                    <input id="logo" name="logo" type="file" class="hidden" accept="image/*" />
                                    <img id="logo-preview" src="" alt="Logo Preview"
                                    class="hidden h-full w-full object-contain">
                                </label>
                            </div>
                            <!-- Banner Image Upload -->
                            <div class="flex flex-col col-span-2 items-start space-y-3 justify-center w-full">
                                <label for="banner_image" class="block text-gray-700 font-semibold mb-2">Banner
                                    Image</label>
                                <label for="banner_image" id="banner-label"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600 ">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6" id="banner-content">
                                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                            800x400px)</p>
                                    </div>
                                    <input id="banner_image" name="banner_image" type="file" class="hidden"
                                        accept="image/*" />
                                    <img id="banner-preview"
                                        class="mt-3 hidden w-full h-64 object-contain rounded-lg" />
                                </label>
                            </div>
                        </div>
                        <h2 class="text-2xl font-semibold mb-6">Company Info</h2>
                        <div class="grid grid-cols-1 space-y-4 mb-6">
                            <div>
                                <label for="company_name" class="block text-gray-700 font-semibold mb-2">Company
                                    Name</label>
                                <input type="text" id="company_name" name="company_name"
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                            </div>
                            <div>
                                <label for="about_us" class="block text-gray-700 font-semibold mb-2">About Us</label>
                                <textarea id="about_us" name="about_us"
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary"></textarea>
                            </div>
                        </div>
                        <div class="items-end justify-end flex">
                            <button type="button"
                                class="next action-button w-full md:w-1/4 px-4  py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Next</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="step my-12 hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="organization_type" class="block text-gray-700 font-semibold mb-2">Organization
                                Type</label>
                            <input type="text" id="organization_type" name="organization_type" value=""
                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                        <div>
                            <label for="industry_types" class="block text-gray-700 font-semibold mb-2">Industry
                                Type</label>
                            <input type="text" id="industry_types" name="industry_types" value=""
                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                        <div>
                            <label for="team_size" class="block text-gray-700 font-semibold mb-2">Team
                                Size</label>
                            <input type="text" id="team_size" name="team_size" value=""
                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                        <div>
                            <label for="year_of_establishment" class="block text-gray-700 font-semibold mb-2">Year
                                of
                                Establishment</label>
                            <input type="date" id="year_of_establishment" name="year_of_establishment"
                                value=""
                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="company_website" class="block text-gray-700 font-semibold mb-2">Company
                                Website</label>
                            <input type="url" id="company_website" name="company_website" value=""
                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                        </div>
                    </div>
                    <div class="items-center justify-between flex">
                        <button type="button"
                            class="prev action-button w-full md:w-1/4 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-700 transition duration-300">Previous</button>
                        <button type="button"
                            class="next action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Next</button>
                    </div>
                </fieldset>
                <fieldset class="step hidden">
                    <div class="my-12 w-full">
                        <h2 class="text-2xl font-semibold mb-6">Social Media Profile</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="social_links[linkedin]"
                                    class="block text-gray-700 font-semibold mb-2">LinkedIn</label>
                                <input type="url" id="social_links_linkedin" name="social_links[linkedin]"
                                    value=""
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                            </div>
                            <div>
                                <label for="social_links[facebook]"
                                    class="block text-gray-700 font-semibold mb-2">Facebook</label>
                                <input type="url" id="social_links_facebook" name="social_links[facebook]"
                                    value=""
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="social_links[instagram]"
                                    class="block text-gray-700 font-semibold mb-2">Instagram</label>
                                <input type="url" id="social_links_instagram" name="social_links[instagram]"
                                    value=""
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                            </div>
                            <div>
                                <label for="social_links[twitter]"
                                    class="block text-gray-700 font-semibold mb-2">Twitter</label>
                                <input type="url" id="social_links_twitter" name="social_links[twitter]"
                                    value=""
                                    class="w-full border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:border-primary">
                            </div>
                        </div>
                        <div class="items-center justify-between flex">
                            <button type="button"
                                class="prev action-button w-full md:w-1/4 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-700 transition duration-300">Previous</button>
                            <button type="button"
                                class="next action-button w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Next</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="step hidden">
                    <div class="py-12 w-full">
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
                        <div class="items-center justify-between flex">
                            <button type="button"
                                class="prev action-button w-full md:w-1/4 px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-700 transition duration-300">Previous</button>
                            <button type="submit"
                                class="w-full md:w-1/4 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition duration-300">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </form>
    </main>

    {{-- <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll(".step");
            const progressBar = document.getElementById("setupProgressBar");
            const stepProgressBar = document.getElementById("stepProgressBar");
            const stepIndicators = [
                document.getElementById("step1Indicator"),
                document.getElementById("step2Indicator"),
                document.getElementById("step3Indicator"),
                document.getElementById("step4Indicator"),
            ];
            let currentStep = 0;

            function updateStep(step) {
                steps.forEach((fieldset, index) => {
                    fieldset.classList.toggle("hidden", index !== step);
                });

                const progress = (step / (steps.length - 1)) * 100;
                progressBar.style.width = `${progress}%`;
                stepProgressBar.style.width = `${progress}%`;

                stepIndicators.forEach((indicator, index) => {
                    if (index <= step) {
                        indicator.classList.add("text-primary");
                        indicator.classList.remove("text-gray-400");
                    } else {
                        indicator.classList.add("text-gray-400");
                        indicator.classList.remove("text-primary");
                    }
                });
            }

            document.querySelectorAll(".next").forEach(button => {
                button.addEventListener("click", () => {
                    if (currentStep < steps.length - 1) {
                        currentStep++;
                        updateStep(currentStep);
                    }
                });
            });

            document.querySelectorAll(".prev").forEach(button => {
                button.addEventListener("click", () => {
                    if (currentStep > 0) {
                        currentStep--;
                        updateStep(currentStep);
                    }
                });
            });

            updateStep(currentStep);
        });
    </script>
    <script>
        document.getElementById('logo').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('logo-preview');
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    document.getElementById('dropzone-content').classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('dropzone-label').addEventListener('click', function(event) {
            if (event.target.tagName !== 'INPUT') {
                document.getElementById('logo').click();
            }
        });
        document.getElementById('banner_image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('banner-preview');
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    document.getElementById('banner-content').classList.add('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('banner-label').addEventListener('click', function(event) {
            if (event.target.tagName !== 'INPUT') {
                document.getElementById('banner_image').click();
            }
        });
    </script>

</body>

</html>
