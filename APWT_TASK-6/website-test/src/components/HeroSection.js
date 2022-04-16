import React from 'react';
import '../App.css';
import { Button } from './Button';
import './HeroSection.css';

function HeroSection() {
  return (
    <div className='hero-container'>
    <img src="/images/img-3.jpg"  />
      {/* <video src='/videos/video-1.mp4' autoPlay loop muted /> */}
      <h1>MADE WITH REACT</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      <div className='hero-btns'>
        <Button
          className='btns'
          buttonStyle='btn--outline'
          buttonSize='btn--large'
        >
          GET STARTED
        </Button>
        
      </div>
    </div>
  );
}

export default HeroSection;
