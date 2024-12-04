import "./App.css";
import { useState, useEffect } from "react";
import CustomNavbar from "./components/Navbar.jsx";
import { Banner } from "./components/Banner.jsx";
import Carrousel from "./components/Carrousel.jsx";


function App() {
 

  return (
    <>
      <CustomNavbar />
      <Banner />
      <AccessibilityWidget theme="light" />
      <Carrousel />

    </>
  );
}

export default App;
