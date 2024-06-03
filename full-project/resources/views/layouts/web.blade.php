<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jobuntu') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="public/favicon.png">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/91ebbc8982.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>
    <script>
        function openTab(evt, tabName, role) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" border-blue-500", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " border-blue-500";
            document.getElementById("role").value = role;
        }
    </script>
</head>

<body class="bg-gray-100">
    <!-- Top Bar -->
    <div class="container mx-auto py-3 hidden md:flex justify-between items-center text-sm">
        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}" class="text-primary border-b-2">Home</a>
            <a href="{{ route('jobs.index') }}" class="text-gray-700">Find Job</a>
            <a href="{{ route('employer.dashboard') }}" class="text-gray-700">Employers</a>
            <a href="{{ route('candidate.dashboard') }}" class="text-gray-700">Candidates</a>
            <a href="#" class="text-gray-700">Pricing Plans</a>
            <a href="#" class="text-gray-700">Customer Supports</a>
        </div>
        <div class="flex items-center justify-center space-x-4">
            <div>
                <i class="fa-solid fa-phone"></i>
                <span class="font-medium">+237 620 205 447</span>
            </div>
            <div class="flex items-center justify-center">
                <img src="https://flagcdn.com/w20/us.png" srcset="https://flagcdn.com/w40/us.png 2x" width="20"
                    alt="United States" />
                <select class="bg-transparent focus:outline-none text-gray-700">
                    <option value="en">
                        <img src="https://flagcdn.com/w20/us.png" alt="Icon" /> English
                    </option>
                    <option value="fr">
                        <img src="path_to_your_icon" alt="Icon" /> French
                    </option>
                </select>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar -->
    <nav class="bg-white py-4 px-4 sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-6">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/assets/logo.png') }}" alt />
                    </a>
                    <div class="hidden md:flex items-center space-x-2">
                        <div
                            class="max-w-md mx-auto bg-white border border-gray-200 rounded-sm flex items-center px-4 py-2">
                            <img src="https://flagcdn.com/w320/cm.png" alt="Cameroon Flag" class="w-6 h-4 mr-2" />
                            <select class="bg-transparent text-gray-700 text-sm focus:outline-none mr-4">
                                <option value="Cameroon">Cameroon</option>
                                <!-- Add more options as needed -->
                            </select>
                            <div class="flex items-center border-l border-gray-200 pl-4">
                                <svg class="w-4 h-4 text-purple-500 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-4.35-4.35M17 10A7 7 0 1110 3a7 7 0 017 7z"></path>
                                </svg>
                                <input type="text" placeholder="Job title, keyword, company"
                                    class="bg-transparent text-gray-700 text-sm focus:outline-none flex-initial" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('register') }}"
                            class="border border-primary bg-transparent text-primary px-4 py-2 rounded">
                            Sign In
                        </a>
                        <button class="bg-primary text-white px-4 py-2 rounded">
                            Post A Jobs
                        </button>
                    </div>
                </div>
                <div class="md:hidden flex gap-2">
                    <a href="login.html"
                        class="border border-primary bg-transparent text-primary px-4 py-2 rounded">Sign In</a>
                    <button data-collapse-toggle="navbar-default" id="menu-toggle" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="navbar-default" class="hidden md:hidden">
            <a href="#" class="block px-4 py-2 text-primary border-b-2">Home</a>
            <a href="#" class="block px-4 py-2 text-gray-700">Find Job</a>
            <a href="#" class="block px-4 py-2 text-gray-700">Employers</a>
            <a href="#" class="block px-4 py-2 text-gray-700">Candidates</a>
            <a href="#" class="block px-4 py-2 text-gray-700">Pricing Plans</a>
            <a href="#" class="block px-4 py-2 text-gray-700">Customer Supports</a>
            <div class="items-center space-x-2">
                <div class="max-w-md mx-auto bg-white border border-gray-200 rounded-sm flex items-center px-4 py-2">
                    <img src="https://flagcdn.com/w320/cm.png" alt="Cameroon Flag" class="w-6 h-4 mr-2" />
                    <select class="bg-transparent text-gray-700 text-sm focus:outline-none mr-4">
                        <option value="Cameroon">Cameroon</option>
                        <!-- Add more options as needed -->
                    </select>
                    <div class="flex items-center border-l border-gray-200 pl-4">
                        <svg class="w-4 h-4 text-purple-500 mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M17 10A7 7 0 1110 3a7 7 0 017 7z"></path>
                        </svg>
                        <input type="text" placeholder="Job title, keyword, company"
                            class="bg-transparent text-gray-700 text-sm focus:outline-none flex-initial" />
                    </div>
                </div>
            </div>


        </div>
    </nav>
    <!-- Nav Bar End -->
    @yield('content')
    <!-- footer -->
    <footer class="bg-[#18191C]">
        <div class="mx-auto max-w-screen-xl px-6 py-10 sm:px-6 lg:px-8 mt-24 ">
            <div class="lg:flex lg:items-start lg:gap-8">
                <div class="text-teal-600">
                    <a href="" class="text-[#ffffff] text-2xl">
                        JOBUNTU
                    </a>
                </div>

                <div class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-5 lg:gap-y-16">
                    <div class="col-span-2">
                        <div>
                            <h2 class="text-2xl font-bold text-[#ffffff]">Get the latest news!</h2>
                            <p class="mt-4 text-[#ffffff]">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
                                molestias.
                            </p>
                        </div>
                    </div>

                    <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
                        <form class="w-full">
                            <label for="UserEmail" class="sr-only">Email</label>
                            <div
                                class="border border-white p-2 focus-within:ring sm:flex sm:items-center sm:gap-4 bg-white">
                                <input type="email" id="UserEmail" placeholder="john@rhcp.com"
                                    class="w-full border-none focus:border-transparent focus:ring-transparent sm:text-sm" />
                                <button
                                    class="mt-1 w-full bg-white-500 px-6 border border-gray py-3 text-sm font-bold uppercase tracking-wide text-[#570AF1] transition-none hover:border-[#570AF1] sm:mt-0 sm:w-auto sm:shrink-0">
                                    Sign Up
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <div class="">
                            <p class="text-[#5E6670]">Call now:
                                <span class="text-[#FFFFFF]">+237 620 205 44</span>
                            </p>
                        </div>
                        <span class="text-[#5E6670]">
                            6391 Elgin St. Celina, Delaware 10299, New York, United States of America
                        </span>
                    </div>

                    <div class="col-span-2 sm:col-span-1 text-[#FFFFFF]">
                        <p class="font-medium text-[#FFFFFF]">Quick Link</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">About</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Pricing</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-[#ffffff]">Candidate</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">About</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Meet the Team</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Accounts
                                    Review</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Live Chat</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-[#ffffff]">Employers</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">FAQs</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Live Chat</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Live Chat</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <p class="font-medium text-[#ffffff]">Support</p>
                        <ul class="mt-6 space-y-4 text-sm">
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Accessibility</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Returns
                                    Policy</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Refund Policy</a>
                            </li>
                            <li>
                                <a href="#" class="text-[#9199A3] transition hover:opacity-75">Hiring
                                    Statistics</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-8 border-t border-gray-100 pt-8">
                <div class="sm:flex sm:justify-between">
                    <p class="text-xs text-[#9199A3]">&copy;2024 Jobuntu - Job Portal. All rights Reserved.</p>
                    <ul class="col-span-2 flex justify-start gap-6 lg:col-span-5 lg:justify-end">
                        <li>
                            <a href="#" rel="noreferrer" target="_blank"
                                class="text-[#9199A3] transition hover:opacity-75">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" rel="noreferrer" target="_blank"
                                class="text-[#9199A3] transition hover:opacity-75">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427C2.013 15.287 2 14.947 2 12.231v-.08c0-2.643.012-2.987.06-4.043.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.933 2.012 9.273 2 11.988 2h.08zm0 1.802h-.08c-2.575 0-2.883.01-3.894.057-.94.043-1.448.196-1.784.327-.452.176-.776.387-1.116.727a3.106 3.106 0 00-.727 1.116c-.131.336-.284.844-.327 1.784-.048 1.011-.057 1.32-.057 3.894v.08c0 2.575.01 2.883.057 3.894.043.94.196 1.448.327 1.784.176.452.387.776.727 1.116.34.34.664.551 1.116.727.336.131.844.284 1.784.327 1.011.048 1.32.057 3.894.057h.08c2.575 0 2.883-.01 3.894-.057.94-.043 1.448-.196 1.784-.327.452-.176.776-.387 1.116-.727.34-.34.551-.664.727-1.116.131-.336.284-.844.327-1.784.048-1.011.057-1.32.057-3.894v-.08c0-2.575-.01-2.883-.057-3.894-.043-.94-.196-1.448-.327-1.784a3.106 3.106 0 00-.727-1.116c-.34-.34-.664-.551-1.116-.727-.336-.131-.844-.284-1.784-.327-1.011-.048-1.32-.057-3.894-.057zm0 5.655a4.514 4.514 0 100 9.029 4.514 4.514 0 000-9.029zm0 1.802a2.712 2.712 0 110 5.424 2.712 2.712 0 010-5.424zm5.148-2.082a1.044 1.044 0 110 2.088 1.044 1.044 0 010-2.088z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" rel="noreferrer" target="_blank"
                                class="text-[#9199A3] transition hover:opacity-75">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8 19c8.837 0 13.675-7.19 13.675-13.675 0-.209 0-.418-.015-.626A9.787 9.787 0 0024 2.557a9.631 9.631 0 01-2.793.765 4.89 4.89 0 002.148-2.703 9.725 9.725 0 01-3.087 1.183 4.864 4.864 0 00-8.325 4.429A13.815 13.815 0 011.671 1.149a4.865 4.865 0 001.506 6.481 4.803 4.803 0 01-2.205-.609v.06a4.868 4.868 0 003.905 4.779 4.899 4.899 0 01-2.2.084 4.87 4.87 0 004.546 3.38A9.774 9.774 0 010 17.54 13.8 13.8 0 007.548 19" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footet-end -->
    <script>
        // Toggle mobile menu
        document
            .getElementById("menu-toggle")
            .addEventListener("click", function() {
                var menu = document.getElementById("navbar-default");
                menu.classList.toggle("hidden");
            });
    </script>

</body>

</html>
