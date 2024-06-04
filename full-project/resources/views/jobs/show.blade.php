@extends('layouts.web')
@section('content')
    <!-- find-job nav -->
    <div class="container mx-auto py-3  flex justify-between items-center text-sm bg-[#f7f7f7]">
        <a href="" class="text-[#18191C] font-bold" style="font-size: 18px;">Job Details</a>
        <a href="" class="text-[#767F8C]" style="font-size: 14px;">Home/
            <span class="text-[#18191C]">Job Details</span>
        </a>
        <div class="md:hidden flex space-x-4">
            <div class="relative flex">
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

                <!-- Avatar image -->
                <img src="{{ asset($job->employer->logo ?? '') }}" alt="Avatar" class="w-8 h-8 rounded-full" />
            </div>
        </div>
    </div>

    <!-- jobdetails -->

    <div class="bg-white py-6 p-6 px-10" style="border-bottom: 1px solid #EDEFF5;">
        <div class="flex flex-col md:flex-row gap-4 justify-between items-start">
            <div class="flex text-nowrap">
                <img src="{{ asset($job->employer->logo ?? '') }}" alt="" style="height: 50px; align-self: center;">
                <div class="text px-4">
                    <h1 class=" text-2xl font-semibold">
                        {{ $job->job_title }}</h1>
                    <p style="font-size: 18px; font-weight: 400; line-height: 28px; color: #474C54; margin: 0;">at
                        {{ $job->employer->company_name }}
                        <span class='text-[#ffffff]'
                            style="padding: 4px 12px; border-radius: 3px; width: 98px; height: 28px; border: 1px solid #0BA02C; background-color: #0BA02C; font-size: 14px; font-weight: 600; line-height: 20px;">{{ strtoupper($job->job_type) }}</span>
                        <span class=' '
                            style="font-size: 14px;color: #E05151; font-weight: 400; line-height: 20px;border: 1px solid #FCEEEE; background: #FCEEEE; border-radius: 4px; width: 59px; height: 20px;">featured</span>
                    </p>
                </div>
            </div>
            <div class="flex flex-col items-end">
                <div class="flex items-center gap-4 mb-4">
                    <p class="text-[#570AF1]"
                        style="display: flex; align-items: center; justify-content: center; height: 24px; width: 24px; border: 1px solid #E4D8FE; padding: 16px; border-radius: 2px; background-color: #E4D8FE;">
                        <i class="fas fa-bookmark"></i>
                    </p>
                    <div class="">
                        <div x-data="{ open: false }">
                            <!-- Open modal button -->
                            <button x-on:click="open = true" class="bg-primary text-white px-4 py-2 rounded"> Apply Now <i
                                    class="fas fa-arrow-right ml-2"></i></button>
                            <!-- Modal Overlay -->
                            <div x-show="open"
                                class="fixed inset-0 px-2 z-10 overflow-hidden flex items-center justify-center">
                                <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition-opacity ease-in duration-300"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                    class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                <!-- Modal Content -->
                                <div x-show="open" x-transition:enter="transition-transform ease-out duration-300"
                                    x-transition:enter-start="transform scale-75"
                                    x-transition:enter-end="transform scale-100"
                                    x-transition:leave="transition-transform ease-in duration-300"
                                    x-transition:leave-start="transform scale-100"
                                    x-transition:leave-end="transform scale-75"
                                    class="bg-white rounded-md shadow-xl overflow-hidden max-w-md w-full sm:w-96 md:w-1/2 lg:w-2/3 xl:w-1/3 z-50">
                                    <!-- Modal Header -->
                                    <div class="bg-primary text-white px-4 py-2 flex justify-between">
                                        <h2 class="text-lg font-semibold">Apply for this Job</h2>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="p-4">
                                        <p>This is the content of the modal. You can add any content here. Lorem ipsum dolor
                                            sit amet</p>
                                            <hr class="py-4">
                                        <form method="POST" action="{{ route('jobs.apply', $job->id) }}">
                                            @csrf
                                            <div class="mb-4">
                                                <label for="resume" class="block text-gray-700 text-sm font-bold mb-2">Choose
                                                    Resume</label>
                                                <input type="file" name="resume" id="resume" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            </div>
                                            <div class="mb-4">
                                                <label for="coverLetter" class="block text-gray-700 text-sm font-bold mb-2">Cover
                                                    Letter</label>
                                                <textarea id="coverLetter" name="cover_letter" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    placeholder="Write down your biography here. Let the employers know who you are..." rows="4" cols="100"> </textarea>
                                            </div>
                                            <div class="flex justify-between space-x-2">
                                                <button type="button"  x-on:click="open = false"
                                                    class="bg-gray-100 text-primary px-4 py-2 rounded">Cancel</button>
                                                <div class="flex items-center">
                                                    <button type="submit"
                                                        class="bg-primary text-white px-4 py-2 rounded w-fit">Apply
                                                        Now
                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 my-8">
            <div class="col-span-2 space-y-4">
                <h3 class="text-2xl font-semibold">Job Description</h3>
                <div>
                    <p style="font-size: 16px;  font-weight: 400;line-height:24px; color: #5E6670; margin-bottom: 20px;">
                        {{ $job->job_description }}</p>

                </div>



            </div>
            <!-- New Small Boxes under Apply Now and Bookmark -->
            <div class="sss">
                <div class="flex items-center w-full md:w-full">
                    <div class="border text-nowrap flex p-7 rounded mb-4 justify-between"
                        style="border-color: #E7F0FA; background-color: white; border: 1px solid #E7F0FA; width: 100%;">
                        <div class="flex flex-col items-center sm:flex-col sm:items-center justify-center"
                            style="border-right: 1px solid #E7F0FA; padding-right: 20px; margin-right: 20px;">
                            <h2 class="text-[#18191C] md:items-center sm:items-center"
                                style="font-size: 16px; font-weight: 500; line-height: 24px;">Salary</h2>
                            <p style="font-size: 20px; font-weight: 500; line-height: 24px; color: #0BA02C;">
                                ${{ number_format($job->min_salary) }}-${{ number_format($job->max_salary) }}</p>
                            <p style="font-size: 14px; font-weight: 400; line-height: 20px; color: #767F8C;">
                                {{ $job->salary_type }} salary</p>
                        </div>
                        <div class="flex flex-col  items-center justify-center">
                            <img src="../assets/assets/assets/MapTrifold.png" alt="">
                            <p style="font-size: 20px; font-weight: 500; line-height: 24px; color:  #18191C;">Job Location
                            </p>
                            <p style="font-size: 14px; font-weight: 400; line-height: 20px; color: #767F8C;">
                                {{ $job->city }}, {{ $job->country }}</p>
                        </div>
                    </div>
                </div>


                <div class="border rounded md:w-full sm:w-fit" style="border-color: #E4E4E4; height: fit-content;">
                    <div style="border-bottom: 1px solid #E4D8FE; width: 100%; " class="pt-5">
                        <h2 style="font-size: 18px; font-weight: 500; line-height: 28px; color: #18191C;" class="px-4">
                            Job Overview</h2>
                        <div class="grid grid-cols-3 gap-6 mt-5 px-4">
                            <div>
                                <img src="../assets/assets/assets/CalendarBlank.png" alt="">
                                <h2>Job Posted:</h2>
                                <p>14 May, 2024</p>


                            </div>
                        </div>

                    </div>
                    <div class="p-4 mb-4 ">
                        <h2 style="font-size: 18px;font-weight: 500;line-height: 28px; color: #18191C;">Share this job:
                        </h2>
                        <div class="flex gap-4">
                            <div
                                style="padding:
            8px, 16px, 8px, 16px; border: 1px solid #E4D8FE; color:
#570AF1; background-color: #E4D8FE;">
                                <p>copy links</p>
                            </div>
                            <img src="../assets/assets/assets/Social icon.png" alt="">
                            <img src="../assets/assets/assets/Social icon (1).png" alt="">
                            <img src="../assets/assets/assets/Social icon (2).png" alt="">
                            <img src="../assets/assets/assets/Envelope.png" alt="">

                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- <div style="border-bottom: 2px solid #E4E4E4;"></div> -->
    </div>
@endsection
