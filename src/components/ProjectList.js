import React, { Component } from 'react'
import Project from './Project'
import Image from './Image'

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
              <Project key={index} name={project.name} description={project.description} languages={project.languages} languagesURL={project.languagesURL} frameworks={project.frameworks}>
                <Image key={index} imageIndex={index}/>
              </Project>
            )}
          </ul>
        </div>
    );
  }
}

export default ProjectList
