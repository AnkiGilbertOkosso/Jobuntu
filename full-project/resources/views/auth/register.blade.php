<x-guest-layout>
    <div class="flex justify-center h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/3"
            style="background-image: url(https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                <div>
                    <h2 class="text-4xl font-bold text-white">Join Jobuntu Today</h2>
                    <p class="max-w-xl mt-3 text-gray-300">Create an account to get started. Whether you are a job
                        seeker or an employer, Jobuntu has the tools you need to succeed.</p>
                </div>
            </div>
        </div>

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <div class="text-center">
                    <a href="{{ route('home') }}" class="">
                        <h2 class="text-4xl font-bold text-center text-primary">Jobuntu</h2>
                    </a>
                    <p class="mt-3 text-gray-500">Create your account</p>
                </div>

                <div class="mt-8">
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <input type="hidden" id="role" name="role" value="1">
                                <label for="name" class="block mb-2 text-sm text-gray-600">Candidate Name</label>
                                <input type="text" id="name" name="name" placeholder="Your full name"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <label for="email" class="block mb-2 text-sm text-gray-600">Email
                                    Address</label>
                                <input type="email" id="email" name="email" placeholder="example@example.com"
                                    :value="old('email')" required autocomplete="username"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                                <input type="password" id="password" name="password" placeholder="Your Password"
                                    required autocomplete="new-password"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm text-gray-600">Password</label>
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

                    <div id="Employer" class="tab-content mt-8">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div>
                                <input type="hidden" id="role" name="role" value="2">
                                <label for="name" class="block mb-2 text-sm text-gray-600">Company Name</label>
                                <input type="text" id="name" name="name" placeholder="Company Inc."
                                    :value="old('name')" required autofocus autocomplete="name"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40"
                                     />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <label for="email" class="block mb-2 text-sm text-gray-600">Email
                                    Address</label>
                                <input type="email" id="email" name="email"
                                    placeholder="example@company.com" :value="old('email')"
                                    required autocomplete="username"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40"
                                     />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </div>
                            <div class="mt-4">
                                <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                                <input type="password" id="password" name="password" placeholder="Your Password"
                                    required autocomplete="new-password"
                                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm text-gray-600">Password</label>
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

                    <p class="mt-6 text-sm text-center text-gray-400">Already have an account? <a
                            href="{{ route('login') }}"
                            class="text-primary focus:underline focus:outline-none hover:underline">Sign In</a>.</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
