<!-- Top Bar -->
<div class="bg-gray-100">
    <div class="container mx-auto py-3 hidden md:flex justify-between items-center text-sm">
        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'text-primary border-b-2' : 'text-gray-700' }}">Home</a>
            <a href="{{ route('jobs.index') }}"
                class="{{ request()->routeIs('jobs.index') ? 'text-primary border-b-2' : 'text-gray-700' }}">Find Job</a>
            <a href="{{ route('employer.dashboard') }}"
                class="{{ request()->routeIs('employer.dashboard') ? 'text-primary border-b-2' : 'text-gray-700' }}">Employers</a>
            <a href="{{ route('candidate.dashboard') }}"
                class="{{ request()->routeIs('candidate.dashboard') ? 'text-primary border-b-2' : 'text-gray-700' }}">Candidates</a>
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
                        <img src="https://flagcdn.com/w20/us.png" alt="Icon" />
                        English
                    </option>
                    <option value="fr">
                        <img src="path_to_your_icon" alt="Icon" />
                        French
                    </option>
                </select>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar -->
<nav class="border-b bg-white py-4 px-4 sticky top-0 z-auto">
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
                    <!-- Notification icon -->
                    <div class="relative">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M 12 2 C 11.172 2 10.5 2.672 10.5 3.5 L 10.5 4.1953125 C 7.9131836 4.862095 6 7.2048001 6 10 L 6 16 L 4 18 L 4 19 L 10.269531 19 A 2 2 0 0 0 10 20 A 2 2 0 0 0 12 22 A 2 2 0 0 0 14 20 A 2 2 0 0 0 13.728516 19 L 20 19 L 20 18 L 18 16 L 18 10 C 18 7.2048001 16.086816 4.862095 13.5 4.1953125 L 13.5 3.5 C 13.5 2.672 12.828 2 12 2 z M 12 6 C 14.206 6 16 7.794 16 10 L 16 16 L 16 16.828125 L 16.171875 17 L 7.828125 17 L 8 16.828125 L 8 16 L 8 10 C 8 7.794 9.794 6 12 6 z">
                                </path>
                            </svg>
                        </button>
                        <!-- Red dot -->
                        <div class="absolute w-3 h-3 bg-red-500 rounded-full top-0 right-0"></div>
                    </div>
                    <a href="{{ route('candidate.profile') }}">
                        <!-- Avatar image -->
                        <img src="{{ asset(Auth::user()->candidate->profile_picture ?? '') }}" alt="Avatar"
                            class="w-8 h-8 rounded-full" />
                    </a>

                </div>
            </div>
            <div class="md:hidden flex gap-2">
                <a href="{{ route('candidate.profile') }}">
                    <!-- Avatar image -->
                    <img src="{{ asset(Auth::user()->candidate->profile_picture ?? '') }}" alt="Avatar" class="w-8 h-8 rounded-full" />
                </a>
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
        <a href="{{ route('home') }}" class="text-primary border-b-2">Home</a>
        <a href="{{ route('jobs.index') }}" class="text-gray-700">Find
            Job</a>
        <a href="{{ route('employer.dashboard') }}" class="text-gray-700">Employers</a>
        <a href="{{ route('candidate.dashboard') }}" class="text-gray-700">Candidates</a>
        <a href="#" class="text-gray-700">Pricing Plans</a>
        <a href="#" class="text-gray-700">Customer Supports</a>
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
