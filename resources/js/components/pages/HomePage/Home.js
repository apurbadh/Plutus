import React from 'react';
import ReactDOM from "react-dom"
import HeroSection from '../../HeroSection';
import { homeObjOne, homeObjTwo, homeObjThree, homeObjFour } from './Data';

function Home() {
  return (
    <>
      <HeroSection {...homeObjOne} />
      <HeroSection {...homeObjFour} />
      <HeroSection {...homeObjTwo} />
      <HeroSection {...homeObjThree} />

    </>
  );
}

export default Home;

if (document.getElementById('home-react'))
{
    ReactDOM.render(<Home/>, document.getElementById('home-react'))
}
