import React, { Component } from 'react'
import Signature from '../images/signature.png'

class About extends Component {
  render() {
    return (
      <div className="About">
        <ul>
          <li>
            <div className="name">
              <p>Hello, my name is Aaron Holland I am a web developer and a certified Solidworks Professional.</p>

              <p>For the past 2 years I have been working as a CAD Operator at Barrette Outdoor Living.
                Barrette is (short one liner of what barrette is.) While at Barrette I have earned two
                certifications, Solidworks Associate and Solidworks Professional. Something about always learning
                and pushing beyond my comfort zone to progress.</p>

              <p>Finding myself in a leardership role mostly I found myself creating internal web tools
                to improve the efficiancy of our entire company. What started as side projects soon became
                actual projects that Barrette has allowed me to work on if my daily work has been completed.
                Time management fast became a skill that I have gotten very good at.</p>

              <p>Before working at Barrette I have created my own non profit that was created with a ruby
                on rails application and also an IOS application. Launched and managed a popular safari
                browser extension called Resize-Me. Also involved in a lot of volunteer positions and
                side projects to learn as much as I could. Mention <a href="https://teamtreehouse.com/aaronholland">Treehouse</a> and that I have completed
                two tracks on there (rails and full stack javascript developer)</p>

              <p>I am a very hard working problem solver that is looking to gain experience working with
              a team of talented people that I can learn from. I am very excited to be able to make this
              transition to being a full time web developer. If you would like to learn more about me please
              check out my <a href="https://github.com/aaronholla">GitHub</a> profile. You can also reach out
              to me on <a href="https://twitter.com/aaronholla_">Twitter</a> I'm always looking forward to
              talking to interesting people.</p>

              <br /><p><br />Thank you,<br /><br />Aaron Holland<br /><img src={Signature} alt="Signature" /></p>

            </div>
          </li>
        </ul>
      </div>
    );
  }
}

export default About;
