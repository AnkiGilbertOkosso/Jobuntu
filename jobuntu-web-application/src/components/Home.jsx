/* eslint-disable react/jsx-no-comment-textnodes */
// import React from 'react'
import ill from '../assets/Illustration.png';
import icon1 from '../assets/Icon1.png';
// import { AiOutlineSearch } from "react-icons/ai";
import { CiSearch } from "react-icons/ci";
import { CiLocationOn } from "react-icons/ci";

function Home() {
  return (
    <div className='pt-[] pb-[]  bg-hero-color'>
<div>
  <div className='w-[100%] h-[] flex flex-col items-center justify-center'>
    <div className='w-[80%] mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-[2rem]'>
      {/* content */}
      <div>
    <h1 className='text-secondary-text text-[28px] sm:text-[35px] 
    lg:text-[40px] xl:text-[50px] leading-[3rem]
     lg:leading-[4rem] font-extrabold'>
      Find a job that suits<span> <br/>your interest & skills.</span>
      </h1>
      
      <p className='text-secondary-text text-[16px] 
      md:text-[18px] mt-[1rem]'>
        Aliquam vitae turpis in diam convallis finibus in at risus. Nullam in scelerisque leo, eget sollicitudin velit bestibulum.
        </p>
        <div className="mt-[1.5rem]">
  <div className="w-12/12 h-auto md:w-10/12 p-5 xl:w-2/2  md:text-cyan-600 bg-white">
    <section className="w-full h-10 flex items-center ">
      <span className="w-5 h-full text-search-color flex items-center"><CiSearch /></span>
      <input type="" className="w-[60%] md:[70%]
       lg:w-[75%] px-5 py-4 outline-none  border-r border-gray-300 bg-white" placeholder="Job title, Keyword...." />
      <span className="w- h-full text-search-color flex items-center"><CiLocationOn />
</span>
      <input type="" className="w-[60%] md:[70%]
       lg:w-[75%] px-5 py-4 outline-none   border-gray-300 bg-white" placeholder="Your Location" />
      <div style={{}}></div>
      <button className=" px-5 py-4  bg-search-color text-white font-medium flex justify-center items-center">Search</button>
    </section>
    </div>
    <a href="">
    <p className='text-secondary-text text-[16px] 
      md:text-[15px] mt-[1rem] gap-4'>
        Suggestions:Designer,Programming,<span className='text-search-color'>
          Digital Marketing </span> ,video ,Animations      </p></a>
    </div> 
    
    
      </div>
      <div className='hidden lg:block'>
        <img src={ill} alt="hero-image" width={700} height={400} />
      </div>
    </div>

  </div>
  
  <div className="   w-[80%] mx-auto grid
       grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-[2rem] 
       gap-[3rem] pt-20 pb-12">
    <div className="wow fadeInUp" data-wow-duration="1s">
        {/* <!-- service block --> */}
        <div className=" p-4 bg-white  border-2 border-white rounded-lg cursor-pointer hover:scale-100 hover:transition-all duration-300">
            <div className="flex">
            
            <img src={icon1} alt=""   width={60} height={60}/>
           <div className="div">
            <h3 className="text-lg leading-normal mb-2 font-semibold text-black">1,75,325</h3>
            <p className="text-gray-500">Live jobs </p>
            </div>
            </div>
        </div> 
    </div>
    <div className=" p-4 bg-white  border-2 border-white rounded-lg cursor-pointer hover:scale-100 hover:transition-all duration-300">
        {/* <!-- service block --> */}
        <div className=" ">
            <div className="flex">
            
            <img src={icon1} alt="" />
           <div className="div">
            <h3 className="text-lg leading-normal mb-2 font-semibold text-black">97,354</h3>
            <p className="text-gray-500">Companies</p>
            </div>
            </div>
        </div> 
    </div>
    <div className="" data-wow-duration="1s">
        <div className=" p-4 bg-white  border-2 border-white rounded-lg cursor-pointer hover:scale-100 hover:transition-all duration-300">
            <div className="flex">
            
            <img src={icon1} alt="" />
           <div className="div">
            <h3 className="text-lg leading-normal mb-2 font-semibold text-black">38,47,154</h3>
            <p className=" text-gray-500">Candidates</p>
            </div>
            </div>
        </div> 
    </div>
    <div className="" data-wow-duration="1s">
        <div className=" p-4 bg-white  border-2 border-white rounded-lg cursor-pointer hover:scale-100 hover:transition-all duration-300">
            <div className="flex">
            
            <img src={icon1} alt="" />
           <div className="div">
            <h3 className="text-lg leading-normal mb-2 font-semibold text-black">7,532</h3>
            <p className="text-gray-500 hover:text-search-color">New Jobs</p>
            </div>
            </div>
        </div> 
    </div>
</div>

   


    
  </div>
  
</div>
  
  )
}

export default Home