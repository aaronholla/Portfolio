import React, { Component } from 'react'
import Demo from './Demo.js'

class Project extends Component {
  render() {
    return (
      <ul>
        <li>
          <div className="Project">
            <h2>{this.props.name}</h2>
            <p>{this.props.description}</p>
          </div>
          <Demo name={this.props.name} />
        </li>
        <li>
          {this.props.children}
        </li>
      </ul>
    );
  }
}

export default Project
