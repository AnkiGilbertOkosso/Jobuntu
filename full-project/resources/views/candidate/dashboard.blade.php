@extends('layouts.candidate.candidate')

@section('content')
<div class="pt-14">
    <div class="flex flex-col items-start justify-self-start mb-6 space-y-2">
        <h1 class="text-2xl font-semibold">Hello, {{ Auth::user()->name }}</h1>
        <p class="text-gray-700">Here is your daily activities
            and new jobs</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class=" flex flex-row items-center justify-between p-5 bg-blue-100 rounded-lg">
            <div class="text-start">
                <p class="text-2xl font-semibold">589</p>
                <p>Applied Jobs</p>
            </div>
            <div class="bg-white p-5 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                    fill="#570AF1">
                    <path
                        d="M160-120q-33 0-56.5-23.5T80-200v-440q0-33 23.5-56.5T160-720h160v-80q0-33 23.5-56.5T400-880h160q33 0 56.5 23.5T640-800v80h160q33 0 56.5 23.5T880-640v440q0 33-23.5 56.5T800-120H160Zm240-600h160v-80H400v80Zm400 360H600v80H360v-80H160v160h640v-160Zm-360 0h80v-80h-80v80Zm-280-80h200v-80h240v80h200v-200H160v200Zm320 40Z" />
                </svg>
            </div>
        </div>
        <div class=" flex flex-row items-center justify-between p-5 bg-orange-100 rounded-lg">
            <div class="text-start">
                <p class="text-2xl font-semibold">238</p>
                <p>Favorite Jobs</p>
            </div>
            <div class="bg-white p-5 rounded-lg">
                <svg viewBox="0 0 24 24" fill="none" width="24px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 6.2C5 5.07989 5 4.51984 5.21799 4.09202C5.40973 3.71569 5.71569 3.40973 6.09202 3.21799C6.51984 3 7.07989 3 8.2 3H15.8C16.9201 3 17.4802 3 17.908 3.21799C18.2843 3.40973 18.5903 3.71569 18.782 4.09202C19 4.51984 19 5.07989 19 6.2V21L12 16L5 21V6.2Z" stroke="#ffa500" stroke-width="2" stroke-linejoin="round"></path> </g></svg>
            </div>
        </div>
        <div class=" flex flex-row items-center justify-between p-5 bg-green-100 rounded-lg">
            <div class="text-start">
                <p class="text-2xl font-semibold">578</p>
                <p>Jobs Alert</p>
            </div>
            <div class="bg-white p-5 rounded-lg">
                <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" width="24px" fill="rgb(220 252 231)" stroke="rgb(220 252 231)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>notification-on</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <g> <path d="M40.2,26.2A4.5,4.5,0,0,1,39,23.3V19c0-8.1-5.4-15-15-15S9,10.7,9,19v5a2.6,2.6,0,0,1-.7,1.7L4.6,29.4A2,2,0,0,0,4,30.8V38a2,2,0,0,0,2,2H17.1a7,7,0,0,0,13.8,0H42a2,2,0,0,0,2-2V30.8a2,2,0,0,0-.6-1.4ZM40,36H8V31.7l3.1-3.2A6.4,6.4,0,0,0,13,24V19c0-5.3,2.9-11,11-11s11,5.9,11,11v4.3A8.6,8.6,0,0,0,37.3,29L40,31.7Z"></path> <path d="M7,19A17.1,17.1,0,0,1,13.5,5.6a2,2,0,0,0,.4-2.8,2,2,0,0,0-2.8-.3A20.6,20.6,0,0,0,3,19a2,2,0,0,0,4,0Z"></path> <path d="M36.9,2.4a2,2,0,0,0-2.8.4,2,2,0,0,0,.4,2.8A16.9,16.9,0,0,1,41,19a2,2,0,0,0,4,0A20.9,20.9,0,0,0,36.9,2.4Z"></path> </g> </g> </g> </g></svg>
            </div>
        </div>
    </div>

    @if (session('profile_incomplete'))
            <div class="bg-red-100 text-red-600 p-4 rounded mb-6">
                Your profile is not completed. {{ session('profile_incomplete') }} <a href="{{ route('candidate.setting') }}" class="underline ">Here</a>
            </div>
        @endif

    <div class="flex flex-row items-start justify-between mb-4">
        <h2 class="text-xl font-semibold items-center justify-center">Recently
            Posted Jobs</h2>
        <div class="flex justify-between items-center text-[#570AF1] ">
            <a href class="mr-2">View all</a>
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
    <section class="container mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr class>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        JOBS
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 text-nowrap">
                                        Date Applied
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        STATUS
                                    </th>

                                    <!-- <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        APPLICAITON
                                    </th> -->

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="flex gap-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-label="Upwork" role="img" viewBox="0 0 512 512" width="50px"
                                                height="50px" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <rect width="512" height="512" rx="15%" fill="#6fda44"></rect>
                                                    <path fill="#ffffff"
                                                        d="M357.2,296.9c-17,0-33-7.2-47.4-18.9l3.5-16.6l0.1-.6c3.2-17.6,13.1-47.2,43.8-47.2c23,0,41.7,18.7,41.7,41.7S380.2,296.9,357.2,296.9L357.2,296.9z M357.2,171.4c-39.2,0-69.5,25.4-81.9,67.3c-18.8-28.3-33.1-62.2-41.4-90.8h-42.2v109.7c0,21.7-17.6,39.3-39.3,39.3s-39.3-17.6-39.3-39.3V147.8H71v109.7c0,44.9,36.5,81.8,81.4,81.8s81.4-36.9,81.4-81.8v-18.4c8.2,17.1,18.2,34.4,30.4,49.6l-25.8,121.4h43.1l18.7-88c16.4,10.5,35.2,17.1,56.8,17.1c46.2,0,83.8-37.8,83.8-84.1C440.9,209,403.4,171.4,357.2,171.4"></path>
                                                </g>
                                            </svg>

                                            <div class="flex flex-col ml-4">
                                                <div class="flex items-center gap-4">
                                                    <h3 class="font-semibold">Networking Engineer</h3>
                                                    <p class="text-blue-400 border rounded-lg"
                                                        style="color: blue; border: 1px solid lightblue; background-color: lightblue;">Remote</p>
                                                </div>
                                                <div class="flex gap-4">

                                                <div class="flex items-center gap-1 mt-1">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="rgb(107 114 128)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                    <p class="text-sm font-normal">Washington</p>
                                                </div>

                                                <div class="flex items-center gap-1 text-gray-500">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="rgb(107 114 128)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 8.5V8.35417C18 6.50171 16.4983 5 14.6458 5H9.5C7.567 5 6 6.567 6 8.5C6 10.433 7.567 12 9.5 12H14.5C16.433 12 18 13.567 18 15.5C18 17.433 16.433 19 14.5 19H9.42708C7.53436 19 6 17.4656 6 15.5729V15.5M12 3V21" stroke="" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                                    <span class="text-sm font-normal">$50k-80k/month</span>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </td>


                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        <div>

                                            <h2 class="text-sm font-normal">Feb 2, 2019 19:28</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <h2 class="text-sm font-normal">Active</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        <div class="grid grid-cols-3 gap-4 justify-between items-center">
                                            <div class="col-span-2">
                                                <a href="#"
                                                    class="text-blue-600 font-semibold rounded-md bg-slate-100 px-12 py-4 hover:bg-primary hover:text-white">View
                                                    Details</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
