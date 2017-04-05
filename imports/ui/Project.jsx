import React, { Component, PropTypes } from 'react';
import { Meteor } from 'meteor/meteor';

export default class Project extends Component {
  //add check for logged in, allow edit and delete on projects if logged in
  render() {
    return (
      <li>
        <div className="section project">
          <h2>{this.props.name}</h2>
          <span className="text">
            <strong>{this.props.description}</strong>
          </span>
        </div>
        <div className="section photo">
          {this.props.children}
        </div>
      </li>
    );
  }
}

Project.propTypes = {
  name: PropTypes.string.isRequired,
  description: PropTypes.string.isRequired
};
