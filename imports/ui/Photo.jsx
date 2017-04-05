import React, { Component, PropTypes } from 'react';
import { Meteor } from 'meteor/meteor';
import { Parallax } from 'react-parallax';

export default class Photo extends Component {
  render() {
    return (
      <div>
        <Parallax bgImage={'photos/IMG'+this.props.index+'.jpg'} strength={400} className="image" >
          <br/>
          <h1> Buy Button and information will be here. </h1>
        </Parallax>
      </div>
    );
  }
}
