// import React from 'react'


import { CiSearch } from "react-icons/ci";
import logo from '../assets/Logo (1).png';
import flag from '../assets/us.svg'; 
import '../styles/searchbar.css'
// import Button from "../components/button";

function SearchBar() {
  return (
    <div className="searchbar flex">
      <img src={logo} alt="" className="logo"/>
      <div className="searchCont flex">
        <div className="select flex">
          <img src={flag} alt="associated country flag"/>
          <select name="" id="">
            <option value="1">Cameroon</option>
            <option value="2">Egypt</option>
            <option value="3">Arab</option>
            <option value="4">Spain</option>
            <option value="5">Moscow</option>
          </select>
        </div>
        <div className="divider"></div>
        < CiSearch className="search"/>
        <input type="search" name="search"placeholder="Job title, keyword, company" id="search" />
      </div>
      <div className="button  space-x-6 flex">
        <button className="plain" > Sign in </button>
        <button className="color"> Post a job</button>
      </div>
    </div>
  )
}

export default SearchBar