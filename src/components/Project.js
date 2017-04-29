import React, { Component } from 'react'
import Demo from './Demo.js'

class Project extends Component {
  constructor(props){
    super(props)
    this.state = {
      name: props.name,
      description: props.description,
      technologies: props.technologies
    }
  }

  render() {
    return (
      <ul>
        <li>
          <div className="ProjectName">{this.state.name}</div>
          <div className="Project">
            <div className="ProjectInfo">
              <p>{this.state.description}</p>
              <div className="technologies">
                  {this.state.technologies.map((technology, index) =>
                        <span className="technology" key={index}>{technology}</span>
                  )}
              </div>
            </div>
            <div className="Demo">
              <Demo name={this.state.name} demoIndex={this.props.demoIndex}/>
            </div>
          </div>
        </li>
        <li>
          {this.props.children}
        </li>
      </ul>
    );
  }
}

export default Project
