import React, { Component, PropTypes } from 'react';
import { Meteor } from 'meteor/meteor';
import { Parallax } from 'react-parallax';

export default class Photo extends Component {
  render() {
    return (
      //TODO:include a link on hover for buying modal
      <div>
        <Parallax bgImage="photos/header.jpg" strength={400}>
          <br/>
          <h1> Buy Button and information will be here. </h1>
        </Parallax>
      </div>
    );
  }
}
