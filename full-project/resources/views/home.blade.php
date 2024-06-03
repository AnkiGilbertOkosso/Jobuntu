@extends('layouts.web')
@section('content')
    <!-- Hero section  -->
    <div class="container flex flex-col py-4 px-4 mx-auto space-y-6 md:py-16 md:flex-row md:items-center md:space-x-6">
        <div class="flex flex-col items-center w-full md:flex-row md:w-1/2">
            <div class="max-w-lg">
                <h1 class="text-4xl mt-10 md:mt-0 font-bold tracking-wide text-gray-800 md:text-6xl">
                    Find a job that suits your interest & skills.
                </h1>
                <p class="mt-4 text-gray-600">
                    Aliquam vitae turpis in diam convallis finibus in at risus. Nullam
                    in scelerisque leo, eget sollicitudin velit bestibulum.
                </p>
                <div class="mt-6">
                    <div
                        class="block md:flex border py-4 md:py-2 space-y-6 md:space-y-0 rounded-lg shadow-lg bg-white md:w-fit">
                        <div class="flex items-center pl-4">
                            <svg class="text-purple-500 mr-2" width="24" height="24" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35M17 10A7 7 0 1110 3a7 7 0 017 7z"></path>
                            </svg>
                            <input type="text" placeholder="Job title, Keyword..." class="flex-grow text-gray-700" />
                        </div>

                        <div class="flex items-center pl-4 pr-4 border-l">
                            <svg class="mr-2" width="20" height="24" viewBox="0 0 20 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 10C19 17 10 23 10 23C10 23 1 17 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z"
                                    stroke="#570AF1" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <input type="text" placeholder="Your Location" class="flex-grow text-gray-700" />
                        </div>
                        <div class="flex items-center">
                            <button type="submit"
                                class="flex-grow text-center justify-center object-contain text-white bg-primary mx-2 my-2 font-medium rounded-md text-md px-8 py-3 w-full">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
                <div class="py-4 flex flex-inline">
                    <h6 class="text-sm text-[#9199A3]">Suggestion:</h6>
                    <span class="text-sm">Designer, <span class="text-primary">Programming</span>,
                        Digital
                        Marketing, Video, Animation</span>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-full h-full md:w-1/2">
            <img class="object-cover w-full h-full max-w-2xl rounded-md" src="/assets/hero_img.png" alt="hero Image" />
        </div>
    </div>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6  mb-10">
        <div class="bg-white border-none rounded-lg p-5 hover:shadow-2xl">
            <div class="flex flex-row space-x-4">
                <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                    <i class="fa-solid fa-suitcase fa-lg text-primary hover:text-white"></i>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-bold text-[24px]">1234</h1>
                    <p class="text-sm">Live Job</p>
                </div>
            </div>
        </div>
        <!-- ... -->
        <div class="bg-white border-none rounded-lg p-5 hover:shadow-2xl">
            <div class="flex flex-row space-x-4">
                <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                    <i class="fa-solid fa-suitcase fa-lg text-primary hover:text-white"></i>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-bold text-[24px]">10,000</h1>
                    <p class="text-sm">Companies</p>
                </div>
            </div>
        </div>
        <div class="bg-white border-none rounded-lg p-5 hover:shadow-2xl">
            <div class="flex flex-row space-x-4">
                <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                    <i class="fa-solid fa-suitcase fa-lg text-primary hover:text-white"></i>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-bold text-[24px]">10,000</h1>
                    <p class="text-sm">Candidates</p>
                </div>
            </div>
        </div>
        <div class="bg-white border-none rounded-lg p-5 hover:shadow-2xl">
            <div class="flex flex-row space-x-4">
                <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                    <i class="fa-solid fa-suitcase fa-lg text-primary hover:text-white"></i>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-bold text-[24px]">10,000</h1>
                    <p class="text-sm">New Jobs</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- popular vacancies section -->
    <div class="bg-white">
        <div class="container mx-auto justify-center items-center pb-12 pt-20 ">
            <div class="mb-16">
                <h2 class="text-2xl mt-10 md:mt-0 font-semibold tracking-wide text-gray-800 md:text-4xl">
                    Most Popular Vacancies
                </h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 cursor-pointer mt-[2rem]">
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
                <div class="p-4 transition-all duration-300 cursor-pointer">
                    <h1 class="text-[17px] font-semibold mb-[0.4rem] hover:text-[#570AF1] hover:border-b-dashed">
                        Anesthesiologist</h1>
                    <p>45904, open positions</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- most popular vacancies ends -->
    <!-- Category Section -->
    <div class="bg-white">
        <div class="container mx-auto px-4 md:px-0 pt-20 pb-12  border-b border-gray-200">
            <div class="flex flex-row items-center justify-between mb-16 ">
                <h2 class="text-2xl  md:mt-0 font-semibold tracking-wide text-gray-800 md:text-4xl">
                    Popular Category
                </h2>
                <div
                    class="flex justify-between md:mt-5 items-center border text-[#570AF1] py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition-colors duration-300">
                    <a href="" class="mr-2">View all</a>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6  mb-10 text-nowrap">
                <!-- Category Item -->
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl cursor-pointer">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] text-[17px] hover:text-[#570AF1]">Code & Programing
                            </h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] hover:text-[#570AF1]">Graphics & Design</h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] hover:text-[#570AF1]">Music & Audio</h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] hover:text-[#570AF1]">Digital Marketing</h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] hover:text-[#570AF1]">Graphics & Design</h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] hover:text-[#570AF1]">Data Science</h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] hover:text-[#570AF1]">Digital Marketing</h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-none rounded-lg p-5 hover:shadow-5xl">
                    <div class="flex flex-row space-x-4">
                        <div class="p-4 bg-[#E7F0FA] rounded-sm hover:bg-primary">
                            <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                                class="hover:bg-white bg:pr" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 31.9623C16.9698 31.9623 18.9204 31.5614 20.7403 30.7825C22.5601 30.0037 24.2137 28.862 25.6066 27.4229C26.9995 25.9837 28.1044 24.2751 28.8582 22.3947C29.612 20.5144 30 18.499 30 16.4637C30 14.4284 29.612 12.413 28.8582 10.5326C28.1044 8.65225 26.9995 6.9437 25.6066 5.50452C24.2137 4.06534 22.5601 2.92373 20.7403 2.14485C18.9204 1.36597 16.9698 0.965088 15 0.965088C11.0218 0.965088 7.20644 2.59797 4.3934 5.50452C1.58035 8.41107 0 12.3532 0 16.4637C0 20.5742 1.58035 24.5163 4.3934 27.4229C7.20644 30.3294 11.0218 31.9623 15 31.9623ZM14.6133 22.732L22.9467 12.3996L20.3867 10.1954L13.22 19.0795L9.51167 15.2462L7.155 17.6812L12.155 22.8474L13.445 24.1803L14.6133 22.732Z"
                                    fill="#570AF1" class="bg-primary hover:bg-white" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="font-bold text-[#18191C] hover:text-[#570AF1]">Digital Marketing</h1>
                            <p class="text-sm text-[#5E6670]">357 Open position</p>
                        </div>
                    </div>
                </div>
                <!-- boxes -->
            </div>
        </div>
    </div>

    <!-- Category Section End -->
    <!-- featured jobs start -->
    <div class="bg-white">
        <div class="container px-4 md:px-0 mx-auto pt-12">
            <div class="flex flex-row items-center justify-between mb-16 ">
                <h2 class="text-2xl  md:mt-0 font-semibold tracking-wide text-gray-800 md:text-4xl">
                    Featured job
                </h2>
                <div
                    class="flex justify-between md:mt-5 items-center border text-[#570AF1] py-2 px-4 rounded hover:bg-blue-500 hover:text-white transition-colors duration-300">
                    <a href="{{ route('jobs.index') }}" class="mr-2">View all</a>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </div>
            <div class="container mt-12 w-[100%] mx-auto text-nowrap grid grid-cols-1 lg:grid-cols-3 gap-6">
                @foreach ($jobs as $job)
                    <a href="{{ route('jobs.show', $job->id) }}">
                        <div
                            class="box p-6 mb-6 relative cursor-pointer border hover:scale-110 hover:shadow-sm transition-transform duration-300 rounded-lg border-gray-300">
                            <h1 class='text-2xl font-semibold mb-1 text-[#18191C]'>{{ $job->job_title }}</h1>
                            <div class="flex space-x-4">
                                <p class='text-[#0BA02C] border border-[#E7F6EA] bg-[#E7F6EA]'>
                                    {{ strtoupper($job->job_type) }}</p>
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
        </div>
    </div>
    <!-- featured jobs ends -->


    <!-- Top-Companies Starts Here -->
    <div class="bg-white">
        <div class="container mx-auto px-4 md:px-0 justify-center items-center pb-10 pt-20 ">
            <div class="">
                <h2 class="text-2xl mt-10 md:mt-0 font-semibold tracking-wide text-gray-800 md:text-4xl">
                    Most Popular Vacancies
                </h2>
            </div>
        </div>
        <div class="mt-12 relative container w-[100%] mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 ">
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
            <div
                class="p-7 mb-6 border-2 rounded-lg hover:shadow-2xl hover:scale-110 transition-all duration-700 border-opacity-10 border-gray-500">
                <div class="flex items-center space-x-3">
                    <img src="../assets/assets/assets/dribble.png" alt="job" width="40" height="40" />
                    <!-- Content -->
                    <div class='flex flex-col'>
                        <div class='flex gap-3 items-center'>
                            <h1 class='text-17px font-bold mb-0.4rem text-[#191F33]'>Dribble</h1>
                            <span class='text-[#E05151] border border-[#FCEEEE] rounded bg-[#FCEEEE]'>featured</span>
                        </div>
                        <div class='flex items-center space-x-2'>
                            <i class="fas fa-map-marker-alt" style="color: #767F8C;"></i>
                            <p class="ml-2" style="color: #767F8C;">Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <button
                    class="mt-4 bg-[#E7F0FA] border-[#E7F0FA] text-[#570AF1] rounded-md py-2 w-full hover:bg- hover:border-[#E7F0FA] transition-colors duration-300">
                    Open Position (3)
                </button>
            </div>
        </div>

    </div>
    <!-- Banner -->
    <div class="bg-white items-center justify-center py-12">
        <div class="container px-4 md:px-0 mx-auto items-center justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="grid grid-cols-3 px-8 py-10 rounded-3xl bg-cover bg-no-repeat object-cover"
                    style="background-image: url('../assets/assets/assets/banner.png');">
                    <div class="col-span-2 flex flex-col items-start space-y-4  text-white">
                        <h2 class="font-semibold text-4xl">Become an Employer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur accusantium minus, </p>
                        <button class="bg-white rounded-sm text-primary px-4 py-3 font-semibold">Register Now</button>
                    </div>
                </div>
                <div class="grid grid-cols-3 px-8 py-10 rounded-3xl bg-no-repeat bg-left"
                    style="background-image: url('../assets/assets/assets/banner.png');">
                    <div class="col-span-2 flex flex-col items-start space-y-4  text-white">
                        <h2 class="font-semibold text-4xl">Become an Employer</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur accusantium minus, </p>
                        <button class="bg-white rounded-sm text-primary px-4 py-3 font-semibold">Register Now</button>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
    <!-- Banner end -->
@endsection
