@extends('layouts.web')
@section('content')
    <!-- find-job nav -->
    <div
      class="container mx-auto py-3  flex justify-between items-center text-sm bg-[#F1F2F4]">
      <a href="" class="text-[#18191C] font-bold" style="font-size: 18px;">Job Details</a>
      <a href="" class="text-[#767F8C]" style="font-size: 14px;" >Home/
        <span class="text-[#18191C]">Find job/</span>
        <span class="text-[#18191C]">Graphics & Design/</span>
        <span class="text-[#18191C]">Job Details</span>
        <!-- <span class="text-[#18191C]">Find job</span> -->
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
    <img src="../assets/assets/assets/user.png" alt="Avatar" class="w-8 h-8 rounded-full" />
</button>

    </div>
  </div>
    </div>

    <!-- jobdetails -->

    <div class="bg-white py-6 p-6 px-10" style="border-bottom: 1px solid #EDEFF5;">
      <div class="flex flex-col md:flex-row gap-4 justify-between items-start">
        <div class="flex text-nowrap">
          <img src="../assets/assets/assets/facebook.png" alt="" style="height: 50px; align-self: center;">
          <div class="text px-4">
            <h1 class="" style="font-size: 24px; font-weight: 500; line-height: 32px; color: #18191C;margin: 0;">{{ $job->job_title }}</h1>
            <p style="font-size: 18px; font-weight: 400; line-height: 28px; color: #474C54; margin: 0;">at {{ $job->employer->company_name }}
              <span class='text-[#ffffff]' style="padding: 4px 12px; border-radius: 3px; width: 98px; height: 28px; border: 1px solid #0BA02C; background-color: #0BA02C; font-size: 14px; font-weight: 600; line-height: 20px;">{{ strtoupper($job->job_type) }}</span>
              <span class=' ' style="font-size: 14px;color: #E05151; font-weight: 400; line-height: 20px;border: 1px solid #FCEEEE; background: #FCEEEE; border-radius: 4px; width: 59px; height: 20px;">featured</span>
            </p>
          </div>
        </div>
        <div class="flex flex-col items-end">
          <div class="flex items-center gap-4 mb-4">
            <p class="text-[#570AF1]" style="display: flex; align-items: center; justify-content: center; height: 24px; width: 24px; border: 1px solid #E4D8FE; padding: 16px; border-radius: 2px; background-color: #E4D8FE;">
              <i class="fas fa-bookmark"></i>
            </p>
            <div class="flex items-center border outline-none py-2 px-4 rounded text-center text-white transition-colors duration-300" style="width: 248px; height: 56px; background-color: #570AF1;">
              <button  id="apply-btn" class="mr-2 flex items-center justify-center w-full" style="font-size: 16px; line-height: 24px;">
                Apply Now
                <i class="fas fa-arrow-right ml-2"></i>
              </button>
             <!-- The Modal -->
   <!-- The Modal -->
 <!-- The Modal -->



            </div>
          </div>
          <div id="applyModal" class="hidden fixed inset-0 bg-white shadow-2xl bg-opacity-50 items-center justify-center">
            <div class="bg-white rounded-lg shadow-lg w-full md:w-1/2 lg:w-1/3">
                <div class="flex justify-between items-center p-4 ">
                    <h2 class="text-xl font-semibold text-gray-500">Apply Job: Senior UX Designer</h2>
                    <span class="close text-blue-700 cursor-pointer border border-blue-600 rounded-md">&times;</span>
                </div>
                <div class="p-4">
                    <form>
                        <div class="mb-4">
                            <label for="resume" class="text-sm font-medium text-gray-700">Choose Resume</label>
                            <select id="resume" class="w-full mt-1 border-gray-300  shadow-sm">
                                <option value="" disabled selected>Select...</option>
                                <!-- Options for resumes -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="coverLetter" class=" text-sm font-medium text-gray-700">Cover Letter</label>
                            <textarea id="coverLetter" class="mt-1  w-full border-gray-300 rounded-md shadow-sm" placeholder="Write down your biography here. Let the employers know who you are..." rows="4" cols="100">

                            </textarea>
                        </div>
                        <div class="flex justify-between space-x-2">
                            <button type="button" class="cancel-btn text-blue-600 font-semibold rounded-md bg-slate-100 px-12 py-4 hover:bg-primary hover:text-white">Cancel</button>
                            <div class="flex items-center">
                            <button type="submit" class="text-white bg-blue-600 font-serif rounded-md px-12 py-4 hover:bg-white hover:text-blue-600 ">Apply Now
                              <svg class="ml-2 w-4 h-4" fill="white" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7-7l7 7-7 7"></path>
                                                                </svg>
                            </button>

                        </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>

        </div>
      </div>
        <div class="flex md:w-full sm:w-1/2 flex-wrap   justify-between">
          <div   class="md:w-1/2 sm:w-full">
            <h3 style="font-size: 18px; font-weight: 500; line-height: 28px; ">Job Description</h3>
            <div>
          <p style="font-size: 16px;  font-weight: 400;line-height:24px; color: #5E6670; margin-bottom: 20px;">{{ $job->job_description }}</p>

          </div>



        </div>
        <!-- New Small Boxes under Apply Now and Bookmark -->
          <div class="sss">
            <div class="flex items-center w-full md:w-full">
              <div class="border text-nowrap flex p-7 rounded mb-4 justify-between" style="border-color: #E7F0FA; background-color: white; border: 1px solid #E7F0FA; width: 100%;">
                  <div class="flex flex-col items-center sm:flex-col sm:items-center justify-center" style="border-right: 1px solid #E7F0FA; padding-right: 20px; margin-right: 20px;">
                      <h2 class="text-[#18191C] md:items-center sm:items-center" style="font-size: 16px; font-weight: 500; line-height: 24px;">Salary</h2>
                      <p style="font-size: 20px; font-weight: 500; line-height: 24px; color: #0BA02C;">${{ $job->min_salary }}-${{ $job->max_salary }}</p>
                      <p style="font-size: 14px; font-weight: 400; line-height: 20px; color: #767F8C;">{{ $job->salary_type }} salary</p>
                  </div>
                  <div class="flex flex-col  items-center justify-center">
                         <img src="../assets/assets/assets/MapTrifold.png" alt="">
                      <p style="font-size: 20px; font-weight: 500; line-height: 24px; color:  #18191C;">Job Location</p>
                      <p style="font-size: 14px; font-weight: 400; line-height: 20px; color: #767F8C;"> {{ $job->city }}, {{ $job->country }}</p>
                  </div>
              </div>
          </div>


            <div class="border rounded md:w-full sm:w-fit" style="border-color: #E4E4E4; height: fit-content;" >
              <div style="border-bottom: 1px solid #E4D8FE; width: 100%; " class="pt-5">
              <h2 style="font-size: 18px; font-weight: 500; line-height: 28px; color: #18191C;" class="px-4">Job Overview</h2>
            <div class="grid grid-cols-3 gap-6 mt-5 px-4">
              <div>
                <img src="../assets/assets/assets/CalendarBlank.png" alt="">
                <h2>Job Posted:</h2>
                <p>14 May, 2024</p>


              </div>
          </div>

        </div>
        <div class="p-4 mb-4 ">
          <h2 style="font-size: 18px;font-weight: 500;line-height: 28px; color: #18191C;">Share this job:</h2>
          <div class="flex gap-4">
            <div style="padding:
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
