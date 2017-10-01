import React, { Component } from 'react'
import Banner from '../images/banner.jpg'

class About extends Component {
  render() {
    return (
      <section className="section">
        <div className="banner">
          <img alt="Banner Low Polygon" src={Banner} />
        </div>
        <div id="about">
          <h1>Hi, my name is Aaron Holland.</h1>
          <h2>I am a Web Developer.</h2>
        </div>
      </section>
    );
  }
}

export default About;
