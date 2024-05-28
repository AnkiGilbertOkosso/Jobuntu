<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex justify-center h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/3"
            style="background-image: url(https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
            <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                <div>
                    <h2 class="text-4xl font-bold text-white">Welcome
                        Back to Jobuntu</h2>

                    <p class="max-w-xl mt-3 text-gray-300">Log in to
                        access your Jobuntu account. Manage your job
                        postings or applications with ease. Secure and
                        user-friendly, our platform is designed to help
                        you succeed.</p>
                </div>
            </div>
        </div>

        <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
            <div class="flex-1">
                <div class="text-center">
                    <a href="{{ route('home') }}" class="">
                        <h2 class="text-4xl font-bold text-center text-primary">Jobuntu</h2>
                    </a>

                    <p class="mt-3 text-gray-500">Sign
                        in to access your account</p>
                </div>

                <div class="mt-8">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-600">Email
                                Address</label>
                            <input type="email" name="email" id="email" placeholder="example@example.com"
                                required
                                class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-primary dark:focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>

                        <div class="mt-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600">Password</label>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="text-sm text-gray-400 focus:text-primary hover:text-primary hover:underline">Forgot
                                        password?</a>
                                @endif
                            </div>

                            <input type="password" name="password" id="password" placeholder="Your Password" required
                                class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-primary dark:focus:border-primary focus:ring-primary focus:outline-none focus:ring focus:ring-opacity-40" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="block mt-6">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="mt-6">
                            <button
                                class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-primary rounded-md hover:bg-primary focus:outline-none focus:bg-primary focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                Sign in
                            </button>
                        </div>

                    </form>

                    <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t
                        have an account yet? <a href="{{ route('register') }}"
                            class="text-primary focus:outline-none focus:underline hover:underline">Sign
                            up</a>.</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
