// import React from 'react';
import './App.css'
import Navbar from './components/Navbar';
import SearchBar from './components/SearchBar';
import Home from './components/Home';
import { Category } from './components/Category';
import HowItWorksSection from './components/HowItWorksSection';
import PopularCategoriesSection from './components/PopularCategoriesSection';
import FeaturedJobsSection from './components/FeaturedJobsSection';
import CompaniesSection from './components/CompaniesSection';
import TestimonialsSection from './components/TestimonialsSec';
import CallToActionSectio from './components/CallToActionSectio';
import Footer from './components/Footer';


function App() {
  return (
    <>
 {/* creating components importing here */}
 <Navbar/>
 <SearchBar/>
 <Home/>
 <Category/>
    <HowItWorksSection />
      <PopularCategoriesSection />
      {/* <FeaturedJobsSection /> */}
      {/* <CompaniesSection /> */}
      {/* <TestimonialsSection /> */}
      {/* <CallToActionSectio /> */}
      {/* <Footer /> */}
 



    </>
  )
}

export default App
