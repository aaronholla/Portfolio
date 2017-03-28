import React, { Component, PropTypes } from 'react';
import { Meteor } from 'meteor/meteor';

export default class Project extends Component {
  //add check for logged in, allow edit and delete on projects if logged in
  render() {
    return (
      <li className="project">
        <h2>{this.props.project.name}</h2>
        <span className="text">
          <strong>{this.props.project.description}</strong>
        </span>
      </li>
    );
  }
}

Project.propTypes = {
  project: PropTypes.object.isRequired,
};
