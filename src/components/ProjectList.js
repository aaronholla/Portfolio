import React, { Component } from 'react'
import Project from './Project'

import projects from '../data/projects'

class ProjectList extends Component {
  constructor(props){
    super(props);
    this.state = projects
  }

  render() {
    return (
        <div className="ProjectList">
          <ul>
            {this.state.projects.map((project, index) =>
              <Project key={index} demoIndex={index} name={project.name} description={project.description} technologies={project.technologies} githubURL={project.githubURL} ></Project>
            )}
          </ul>
        </div>
    );
  }
}

export default ProjectList
