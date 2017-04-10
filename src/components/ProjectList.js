import React, { Component } from 'react'
import Project from './Project'
import Image from './Image'

class ProjectList extends Component {
  render() {
    return (
        <div className="ProjectList">
          <ul>
            {/* loop through projects */}
            <Project name="test" description="This is a test project. This will eventually be real data that is pulled in. This will describe the project in detail."/>
            <Image />
          </ul>
        </div>
    );
  }
}

export default ProjectList
