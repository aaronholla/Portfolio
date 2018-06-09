import React, { Component } from "react"

class Project extends Component {
  render() {
    const { name, description, technologies, image, url } = this.props
    return (
      <li>
        <div className="Project">
          <div className="ProjectInfo">
            <div className="ProjectName">{name}</div>
            {url && (
              <p>
                <a href={url} target="_blank">
                  {url}
                </a>
              </p>
            )}
            {description && <p>{description}</p>}
            <div className="technologies">
              {technologies.map((technology, index) => (
                <span className="technology" key={index}>
                  {technology}
                </span>
              ))}
            </div>
          </div>
          <div className="Demo">
            <img alt={name} src={image} />
          </div>
        </div>
      </li>
    )
  }
}

export default Project
