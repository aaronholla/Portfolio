import React, { Component } from 'react'

class About extends Component {
  render() {
    return (
      <div className="About">
        <ul>
          <li>
            <div className="name">
              <svg width="100%" height="100%" viewBox="0 0 3000 250" preserveAspectRatio="xMinYMin meet">
                  <linearGradient id="gr-simple" x1="0" y1="0" x2="100%" y2="100%">
                      <stop stopColor="rgb(25, 255, 255)" offset="10%"/>
                      <stop stopColor="rgb(0, 153, 224)" offset="90%"/>
                  </linearGradient>
                <text x="50%" y="50%" textAnchor="middle" dominantBaseline="central" className="text">Aaron Holland</text>
              </svg>
            </div>
          </li>
        </ul>
      </div>
    );
  }
}

export default About;
