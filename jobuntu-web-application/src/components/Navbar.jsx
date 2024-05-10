// import React from 'react';
import { useState } from 'react';
import phone from '../assets/phone.png';
import { HiMiniXMark } from "react-icons/hi2";
import '../components/Navbar.css';

import { FaBarsStaggered } from "react-icons/fa6";

// import { PhoneOutlined } from '@ant-design/icons';
const Navbar = () => {
    const [isMenuOpen,setIsMenuOpen]=useState(false);
    const toggleMenu =() =>{
        setIsMenuOpen(!isMenuOpen);

    }
    const navitems=[
        {link:"Home",path:"home"},
        {link:"Find Job",path:"findjob"},
        {link:"Employers",path:"employers"},
        {link:"Candidates",path:"candidates"},
        {link:"Pricing Plans",path:"pricingplans"},
        {link:"Customer Supports",path:"customersupport"},
    
    
    ]
  return (
    <>
   <nav className='bg-nav shadow-md md:px-14 p-4 max-w-screen-2xl mx-auto text-secondary-text '>
    <div className='text-x1 text-lg container mx-auto flex justify-between items-center font-medium con'>
        <div className='flex ml-[70px] items-center'>
            {/* <a href="" className="text-secondary-text">Home</a> */}
            {/* implementing nav here to show items using map */}
            <ul className="md:flex space-x-6 nav-links hidden">
                {
                navitems.map(({link,path})=> <a key={link} href={path} className="block text-secondary-text">{link}</a>)
                }
            </ul>
                

        </div>
        {/* phone & language */}
        <div className='space-x-12 mr-[70px] hidden md:flex items-center'>
        <a href="" className='hidden lg:flex items-center text-1xl font-semibold  space-x-3 text-secondary-text'>
            <img src={phone} alt="" className='phone w-6 inline-block items-center' />
        <span>+237 620 205 447</span>
        </a>
         <a href="/" className='hidden lg:flex items-center'>
            <img src="https://cdn-icons-png.flaticon.com/128/4692/4692307.png" alt="" className='mr-2' />
        <span>
        <select className="md:flex items-center bg-transparent" defaultValue="en">
                                <option value="1">English</option>
                                <option value="2">French</option>
                                <option value="3">German</option>
                                <option value="4">Arab</option>
                                <option value="5">Spain</option>
                                <option value="6">Moscow</option>
                                {/* Add more options as needed */}
                            </select>
        </span>
        </a> 
       
        </div>
        {/* hambuger */}
        <div className='md:hidden'>
            <button onClick={toggleMenu} className='text-white focus:outline-none focus:text-gray-300'>
                {
                    isMenuOpen ? (<HiMiniXMark className='w6 h6 text-black' /> ):(<FaBarsStaggered className='w6 h6 text-black' />)
                }

            </button>

        </div>

    </div>
    
  

   
   </nav>

{/* navitem */}
<div className="{}">
    {
      navitems.map(({link,path})=> <a key={link} href={path} className="block text-secondary-text">{link}</a>)  
    }


</div>
</>

       


  );
};

export default Navbar