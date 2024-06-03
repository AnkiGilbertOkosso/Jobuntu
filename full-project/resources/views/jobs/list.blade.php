@extends('layouts.web')
@section('content')
    <!-- find-job nav -->
    <div class="container mx-auto py-3  flex justify-between items-center text-sm bg-[#F1F2F4]">
        <a href="" class="text-[#18191C] font-bold" style="font-size: 18px;">FIND JOB </a>
        <a href="" class="text-[#767F8C]" style="font-size: 14px;">Home/
            <span class="text-[#18191C]">Find job</span>
        </a>
        <div class="md:hidden flex space-x-4">
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
            <button>
                <!-- Avatar image -->
                <img src="/assets/assets/assets/user.png" alt="Avatar" class="w-8 h-8 rounded-full" />
            </button>

        </div>
    </div>

    </div>
    <!-- find-job nav end -->

    <!-- jobs-section -->
    <div class="py-3 bg-[white]">
        <div class=" p-2">
            <div
                class="block md:flex border py-4 md:py-2 space-y-6 md:space-y-0 rounded-lg shadow-lg bg-white w-11/12 mx-auto ">
                <div class="flex items-center flex-grow px-4">
                    <svg class="text-purple-500 mr-2" width="50" height="24" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 10A7 7 0 1110 3a7 7 0 017 7z"></path>
                    </svg>
                    <input type="text" placeholder="Search by: Job tittle, Position, Keyword..."
                        class="flex-grow text-gray-700 outline-none" />
                </div>
                <div class="flex items-center border-l flex-grow px-4">
                    <svg class="mr-2" width="20" height="24" viewBox="0 0 20 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 10C19 17 10 23 10 23C10 23 1 17 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"
                            stroke="#570AF1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input type="text" placeholder="City, state or zip code"
                        class="flex-grow text-gray-700 outline-none" />
                </div>
                <div class="flex items-center flex-grow px-4 space-x-2">
                    <button>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" stroke="#767F8C">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M12 3V7M12 17V21M3 12H7M17 12H21M12 12H12.01M19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12Z"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                    <button
                        class="flex items-center justify-center text-[#18191C] bg-[#F1F2F4] border-[#F1F2F4] font-medium rounded-md text-md px-8 py-3 text-nowrap w-full gap-3">
                        <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" id="filter-alt" class="icon glyph">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M12,9a3.66,3.66,0,0,0,1-.13V21a1,1,0,0,1-2,0V8.87A3.66,3.66,0,0,0,12,9Z"></path>
                                <path d="M19,16a3.66,3.66,0,0,0,1-.13V21a1,1,0,0,1-2,0V15.87A3.66,3.66,0,0,0,19,16Z"></path>
                                <path d="M20,3V8.13a3.91,3.91,0,0,0-2,0V3a1,1,0,0,1,2,0Z"></path>
                                <path d="M6,3V15.13A3.66,3.66,0,0,0,5,15a3.66,3.66,0,0,0-1,.13V3A1,1,0,0,1,6,3Z"></path>
                                <path d="M8,19a3,3,0,1,1-4-2.82,2.87,2.87,0,0,1,2,0A3,3,0,0,1,8,19Z"></path>
                                <path d="M15,5a3,3,0,0,1-2,2.82,2.87,2.87,0,0,1-2,0A3,3,0,1,1,15,5Z"></path>
                                <path
                                    d="M22,12a3,3,0,0,1-2,2.82,2.87,2.87,0,0,1-2,0,3,3,0,0,1,0-5.64,2.87,2.87,0,0,1,2,0A3,3,0,0,1,22,12Z">
                                </path>
                            </g>
                        </svg>
                        <a href="filters.html">
                            Filter
                        </a>

                    </button>
                    <button type="submit"
                        class="text-white bg-primary font-medium rounded-md text-md px-4 py-3 w-full text-nowrap">
                        FIND JOBS
                    </button>
                </div>
            </div>
        </div>
        <div class="container  w-full mx-auto text-nowrap grid grid-cols-1 lg:grid-cols-3 gap-6 px-3 p-6 bg-white">
            @foreach ($jobs as $job)
            <a href="{{ route('jobs.show', $job->id) }}">
                <div
                    class="box p-6 mb-6 relative cursor-pointer border hover:scale-110 hover:shadow-sm transition-transform duration-300 rounded-lg border-gray-300">
                    <h1 class='text-2xl font-semibold mb-1 text-[#18191C]'>{{ $job->job_title }}</h1>
                    <div class="flex space-x-4">
                        <p class='text-[#0BA02C] border border-[#E7F6EA] bg-[#E7F6EA]'>{{ strtoupper($job->job_type) }}</p>
                        <span class='text-[#767F8C]'>salary: ${{ $job->min_salary }}-${{ $job->max_salary }}</span>
                    </div>
                    <div class="flex items-center space-x-5" data-aos="fade-up">
                        <img src="../assets/assets/assets/Employers Logo.png" width="40" height="40"
                            alt="Employer Logo" />
                        <div class='flex flex-col w-full'>
                            <div class="flex justify-between items-center w-full">
                                <h1>{{ $job->employer->company_name }}</h1>
                                <span class="ml-auto text-gray-400"><i class="fas fa-bookmark"></i></span>
                            </div>
                            <div class="flex items-center mt-2 text-gray-400">
                                <i class="fas fa-map-marker-alt"></i>
                                <p class="ml-2"> {{ $job->city }}, {{ $job->country }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

        </div>

        <!-- Pagination -->
        <div class="hidden justify-center mt-2 bg-white">
            <div class="inline-flex">
                <a href="#"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm hover:border  hover:rounded-full mx-1 text-[#99C2FF] hover:text-[#570AF1] hover:bg-[#E7F0FA]">
                    <!-- <i class="fas fa-chevron-left"></i> -->
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm border text-[#5E6670] border-[#F1F2F4] rounded-full mx-1 hover:text-white hover:bg-[#570AF1]">01</a>
                <a href="#"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm border text-[#5E6670] border-[#F1F2F4] rounded-full mx-1 hover:text-white hover:bg-[#570AF1]">02</a>
                <a href="#"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm border text-[#5E6670] border-[#F1F2F4] rounded-full mx-1 hover:text-white hover:bg-[#570AF1]">03</a>
                <a href="#"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm border text-[#5E6670] border-[#F1F2F4] rounded-full mx-1 hover:text-white hover:bg-[#570AF1]">04</a>
                <a href="#"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm border text-[#5E6670] border-[#F1F2F4] rounded-full mx-1 hover:text-white hover:bg-[#570AF1]">05</a>
                <a href="#"
                    class="inline-flex items-center justify-center w-10 h-10 text-sm hover:border  hover:rounded-full mx-1 text-[#99C2FF] hover:text-[#570AF1] hover:bg-[#E7F0FA]">
                    <!-- <i class="fas fa-chevron-right"></i> -->
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
    <!-- jobs-end -->
@endsection
