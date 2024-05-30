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

        <form id="msform" action="{{ route('employer.completeProfile') }}" method="POST">
            <div class="items-center justify-center mx-auto md:px-40">
                <div class="hidden md:flex justify-between items-center mb-4">
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
                            <div class="flex flex-col space-y-3 col-span-1 items-start justify-center w-full">
                                <label for="logo" class="block text-gray-700 font-semibold mb-2">Upload Logo</label>
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6" id="dropzone-content">
                                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>
                                            or drag and drop</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                                <img id="image-preview" class="mt-3 hidden w-full h-64 object-cover rounded-lg" />

                                </label>
                            </div>
                            <div class="flex flex-col col-span-2 items-start space-y-3 justify-center w-full">
                                <label for="banner_image" class="block text-gray-700 font-semibold mb-2">Banner
                                    Image</label>
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 dark:border-gray-600 ">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
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
                                    <input id="dropzone-file" type="file" class="hidden" />
                                </label>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="company-name" class="block text-gray-700 font-semibold mb-2">Company
                                name</label>
                            <input type="text" id="company-name"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary"
                                placeholder="">
                        </div>
                        <div class="mb-6">
                            <label for="about-us" class="block text-gray-700 font-semibold mb-2">About Us</label>
                            <textarea id="about-us"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary h-32"
                                placeholder="Write down about your company here. Let the candidate know who we are..."></textarea>
                        </div>
                        <button type="button"
                            class="next bg-primary text-white font-semibold px-6 py-2 rounded-lg shadow hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50">Save
                            & Next</button>
                    </div>
                </fieldset>
                <fieldset class="step hidden">
                    <div class="py-12 grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label for="organization-type" class="block text-gray-700 font-semibold mb-2">Organization
                                Type</label>
                            <select id="organization-type"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary">
                                <option>Select...</option>
                            </select>
                        </div>
                        <div>
                            <label for="industry-types" class="block text-gray-700 font-semibold mb-2">Industry
                                Types</label>
                            <select id="industry-types"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary">
                                <option>Select...</option>
                            </select>
                        </div>
                        <div>
                            <label for="team-size" class="block text-gray-700 font-semibold mb-2">Team Size</label>
                            <select id="team-size"
                                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary">
                                <option>Select...</option>
                            </select>
                        </div>
                        <div>
                            <label for="year-of-establishment" class="block text-gray-700 font-semibold mb-2">Year of
                                Establishment</label>
                            <div class="relative">
                                <input type="text" id="year-of-establishment"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary"
                                    placeholder="dd/mm/yyyy">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3M16 7V3M4 11h16M4 19h16M4 11V7m0 4v8m16-8v8m0-8V7m0 4v8m-6-4h.01M10 11h.01M10 15h.01M14 11h.01M14 15h.01">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="company-website" class="block text-gray-700 font-semibold mb-2">Company
                                Website</label>
                            <div class="relative">
                                <input type="text" id="company-website"
                                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary"
                                    placeholder="Website url...">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 3C8.134 3 5 6.134 5 10v1H3v3h2v1c0 3.866 3.134 7 7 7s7-3.134 7-7v-1h2v-3h-2v-1c0-3.866-3.134-7-7-7zM12 15h.01M12 11h.01M12 7h.01M15.1 10.9l.7.7M17.1 8.9l.7.7M18.9 7.1l.7.7">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="company-vision" class="block text-gray-700 font-semibold mb-2">Company
                            Vision</label>
                        <textarea id="company-vision"
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200 focus:border-primary h-32"
                            placeholder="Tell us about your company vision..."></textarea>
                    </div>
                    <div class="flex justify-between">
                        <button type="button"
                            class="prev bg-gray-200 text-gray-700 px-6 py-2 rounded-lg shadow hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Previous</button>
                        <button type="button"
                            class="next bg-primary text-white px-6 py-2 rounded-lg shadow hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary font-semibold focus:ring-opacity-50">Save
                            & Next</button>
                    </div>
                </fieldset>
                <fieldset class="step hidden">
                    <div class="py-12 space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700">Social Link 1</label>
                            <div class="mt-1 flex">
                                <select
                                    class="block w-1/4 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>Facebook</option>
                                </select>
                                <input type="url" placeholder="Profile link/url..."
                                    class="block w-3/4 ml-3 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <button type="button" class="ml-3 text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700">Social Link 2</label>
                            <div class="mt-1 flex">
                                <select
                                    class="block w-1/4 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>Twitter</option>
                                </select>
                                <input type="url" placeholder="Profile link/url..."
                                    class="block w-3/4 ml-3 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <button type="button" class="ml-3 text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700">Social Link 2</label>
                            <div class="mt-1 flex">
                                <select
                                    class="block w-1/4 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>Instagram</option>
                                </select>
                                <input type="url" placeholder="Profile link/url..."
                                    class="block w-3/4 ml-3 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <button type="button" class="ml-3 text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700">Social Link 3</label>
                            <div class="mt-1 flex">
                                <select
                                    class="block w-1/4 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>Youtube</option>
                                </select>
                                <input type="url" placeholder="Profile link/url..."
                                    class="block w-3/4 ml-3 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <button type="button" class="ml-3 text-red-500 hover:text-red-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div>
                            <button type="button"
                                class="block w-full text-blue-500 hover:text-blue-700 text-center py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Add New Social Link
                            </button>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-between">
                        <button type="button"
                            class="prev px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Previous</button>
                        <button type="button"
                            class="next bg-primary text-white px-6 py-2 rounded-lg shadow hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary font-semibold focus:ring-opacity-50">Save
                            & Next</button>
                    </div>
                </fieldset>
                <fieldset class="step hidden">
                    <div class="py-12 space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700">Map Location</label>
                            <input type="text" placeholder="Map Location"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700">Phone</label>
                            <div class="mt-1 flex">
                                <select
                                    class="block w-1/4 px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option>+880</option>
                                </select>
                                <input type="tel" placeholder="Phone number..."
                                    class="block w-3/4 ml-3 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700">Email</label>
                            <div class="mt-1 flex">
                                <div
                                    class="flex items-center pl-3 pr-2 py-2 border border-gray-300 rounded-l-md bg-gray-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M2.003 5.884L10 11.618l7.997-5.734A2 2 0 0016.007 4H3.993a2 2 0 00-1.99 1.884zM18 8.118l-7.215 5.171a1 1 0 01-1.57 0L2 8.118V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <input type="email" placeholder="Email address"
                                    class="block w-full px-3 py-2 border border-gray-300 rounded-r-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="mt-8 flex justify-between">
                            <button type="button"
                                class="prev px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Previous</button>
                            <button type="submit"
                                class="px-4 py-2 font-semibold bg-primary text-white rounded-md hover:bg-primary">Finish
                                </button>
                        </div>
                    </div>
                </fieldset>
            </div>

        </form>
    </main>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script>
        const dropzoneFileInput = document.getElementById('dropzone-file');
        const imagePreview = document.getElementById('image-preview');
        const dropzoneContent = document.getElementById('dropzone-content');

        dropzoneFileInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                    dropzoneContent.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.src = '';
                imagePreview.classList.add('hidden');
                dropzoneContent.classList.remove('hidden');
            }
        });

        dropzoneContent.addEventListener('click', () => dropzoneFileInput.click());
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
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

</body>

</html>
