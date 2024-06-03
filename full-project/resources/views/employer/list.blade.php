@extends('layouts.employer.employer')

@section('content')
    <div class="pt-14">
        <div class="flex flex-row items-start justify-between mb-6 space-y-2">
            <h1 class="text-2xl font-semibold">My Jobs<span class="text-gray-400 font-medium">(543)</span></h1>
            <div class="flex flex-row space-x-3">
                <p class="py-2">Job Status</p>
                <select
                    class="block appearance-none bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    id="education">
                    <option>All Jobs</option>
                </select>
            </div>
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
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        STATUS
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        APPLICAITON
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($jobs as $job)
                                    @php
                                        $expiration_date = Carbon\Carbon::parse($job->expiration_date);
                                        $days_remaining = floor(Carbon\Carbon::now()->floatDiffInDays($expiration_date, false));
                                    @endphp
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="flex flex-col ">
                                                <h2 class="font-bold text-lg">{{ $job->job_title }}</h2>
                                                <div class="flex">
                                                    <p>{{ $job->job_type }}<b class="px-2">.</b></p>
                                                    <span>
                                                        @if ($days_remaining > 0)
                                                            {{ $days_remaining }} days remaining
                                                        @elseif ($days_remaining == 0)
                                                            Expires today
                                                        @else
                                                            Expired {{ abs($days_remaining) }} days ago
                                                        @endif
                                                    </span>
                                                </div>

                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                <h2 class="text-sm font-normal">Active</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 -960 960 960" width="24px" fill="#9199A3">
                                                    <path
                                                        d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z" />
                                                </svg>

                                                <h2 class="text-sm font-normal">750
                                                    Applications</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            <div class="grid grid-cols-3 gap-4 justify-between items-center">
                                                <div class="col-span-2">
                                                    <a href="#"
                                                        class="text-primary font-bold rounded-md bg-slate-100 px-12 py-4 hover:bg-primary hover:text-white">View
                                                        Applications</a>
                                                </div>
                                                <div class="col-span-1 relative" x-data="{ showChildren: false }"
                                                    @click.away="showChildren=false">
                                                    <a href="#"
                                                        class="flex items-center justify-center h-10 leading-10 px-4 rounded-md cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100"
                                                        @click.prevent="showChildren=!showChildren">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#9199A3">
                                                            <path
                                                                d="M480-160q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm0-240q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm0-240q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Z" />
                                                        </svg>
                                                        <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                                                    </a>
                                                    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                                                        x-show="showChildren"
                                                        x-transition:enter="transition ease duration-300 transform"
                                                        x-transition:enter-start="opacity-0 translate-y-2"
                                                        x-transition:enter-end="opacity-100 translate-y-0"
                                                        x-transition:leave="transition ease duration-300 transform"
                                                        x-transition:leave-start="opacity-100 translate-y-0"
                                                        x-transition:leave-end="opacity-0 translate-y-4"
                                                        style="display: none;">
                                                        <span
                                                            class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                                                        <div class="bg-white rounded w-full relative z-10 py-1">
                                                            <ul class="list-reset">
                                                                <li class="relative" x-data="{ showChildren: false }"
                                                                    @mouseleave="showChildren=false"
                                                                    @mouseenter="showChildren=true">
                                                                    <a href="#"
                                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                                        <span class="flex-1">Calender</span> </a>
                                                                </li>
                                                                <li class="relative" x-data="{ showChildren: false }"
                                                                    @mouseleave="showChildren=false"
                                                                    @mouseenter="showChildren=true">
                                                                    <a href="#"
                                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                                        <span class="flex-1">Chat</span> </a>
                                                                </li>
                                                                <li class="relative" x-data="{ showChildren: false }"
                                                                    @mouseleave="showChildren=false"
                                                                    @mouseenter="showChildren=true">
                                                                    <a href="#"
                                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                                        <span class="flex-1">Email</span> </a>
                                                                </li>
                                                                <li class="relative" x-data="{ showChildren: false }"
                                                                    @mouseleave="showChildren=false"
                                                                    @mouseenter="showChildren=true">
                                                                    <a href="#"
                                                                        class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                                                        <span class="flex-1">Todo</span> </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
@endsection
