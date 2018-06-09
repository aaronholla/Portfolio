import React, { Component } from "react"
import Banner from "../images/banner.jpg"
import github from "../images/GitHub.png"
import twitter from "../images/Twitter.svg"
import treehouse from "../images/treehouse.png"
import linkedin from "../images/LinkedIn.png"

class About extends Component {
  render() {
    return (
      <section>
        <div id="banner">
          <img alt="Banner Low Polygon" src={Banner} />
        </div>
        <div id="about">
          <h1>Hi, my name is Aaron Holland.</h1>
          <h2>I am a Web Developer.</h2>
          <ul id="about-buttons">
            <li className="aboutmenu">
              <a href="https://github.com/aaronholla" target="_blank">
                <img alt="GitHub" src={github} />
              </a>
            </li>
            <li className="aboutmenu">
              <a href="https://twitter.com/aaronholla_" target="_blank">
                <img alt="Twitter" src={twitter} />
              </a>
            </li>
            <li className="aboutmenu">
              <a href="https://teamtreehouse.com/aaronholland" target="_blank">
                <img alt="Treehouse" src={treehouse} />
              </a>
            </li>
            <li className="aboutmenu">
              <a href="https://www.linkedin.com/in/aaronholla" target="_blank">
                <img alt="LinkedIn" src={linkedin} />
              </a>
            </li>
          </ul>
        </div>
        <div id="bottom-banner">
          <p>You can find some of my favorite projects below.</p>
        </div>
      </section>
    )
  }
}

export default About
