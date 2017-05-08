import React, { Component } from 'react'
import Signature from '../images/signature.png'

class About extends Component {
  render() {
    return (
      <div className="About">
        <ul>
          <li>
            <div className="name">
              <p>Hello, my name is Aaron Holland I am a web developer and a certified Solidworks Professional.
                For the past two years, I have been working as a CAD Operator at Barrette Outdoor Living.
                Barrette one of the largest manufacturers of fencing, railing and outdoor living products in the USA.
                While at Barrette I have improved my skills as a drafter and a web developer by attending training
                courses and passing certification exams.</p>

              <p>Part of my role at Barrette is to create internal web tools to improve the efficiency of certain
                departments or tasks. A few of these started as side projects and quickly became tools that Barrette
                has come to rely on daily.</p>

              <p>Before beginning work at Barrette, I founded my own nonprofit organization called Bin of Parts to
                provide science and technology accessibility to students. I managed an open source website and IOS
                Application that allowed FIRST Robotics Competition events to inventory parts at their spare parts desks.
                Prior to Bin of Parts, I launched and managed a popular safari browser extension called Resize-Me.</p>

              <p>I am a very hard working problem solver that is always looking to learn new skills. One of the places
                that I learn these skills is on <a href="https://teamtreehouse.com/aaronholland">Treehouse</a>. I have completed two of what they call tracks which are in-depth
                series of training videos on specific topics. The two tracks that I have completed are Rails Development and
                Full Stack Javascript. I'm a quick learner and love learning new tools and technologies. At the moment I am
                learning how to build web apps using Facebook's React framework which this website is built with.</p>

              <p>If you would like to learn more about me please check out my <a href="https://github.com/aaronholla">GitHub</a> profile. You can also reach out to me on <a href="https://twitter.com/aaronholla_">Twitter</a> I'm always looking
              forward to talking to interesting people.</p>

              <p><br />Thank you,<br /><br />Aaron Holland<br /><img src={Signature} alt="Signature" /></p>

            </div>
          </li>
        </ul>
      </div>
    );
  }
}

export default About;
