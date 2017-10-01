import React, { Component } from 'react'


class NavBar extends Component {
  render() {
    return (
      <nav className="navbar">
    		<div id="background"></div>
        <div className="holder">
            <div className="title"><span>Aaron Holland</span></div>
            {/* <ul>
                <li><a href="" id="nav-about">About Me</a></li>
                <li><a href="" id="nav-projects">Projects</a></li>
            </ul> */}
        </div>
      </nav>
    );
  }
}

export default NavBar
