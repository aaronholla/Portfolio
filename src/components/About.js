import React, { Component } from 'react'

class About extends Component {
  render() {
    return (
      <div className="About">
        <ul>
          <li>
            <svg viewBox="0 0 500 800">
                <linearGradient id="gr-simple" x1="0" y1="0" x2="100%" y2="100%">
                    <stop stopColor="rgb(25, 255, 255)" offset="10%"/>
                    <stop stopColor="rgb(0, 153, 224)" offset="90%"/>
                </linearGradient>
              <text textAnchor="middle" x="50%" y="50%" dy=".35em" className="text">Aaron Holland</text>
            </svg>
          </li>
        </ul>
      </div>
    );
  }
}

export default About;
