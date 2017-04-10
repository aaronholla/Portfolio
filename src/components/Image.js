import React, { Component } from 'react'
import { Parallax } from 'react-parallax'
import photo from '../logo.svg'

class Image extends Component {
  render() {
    return (
        <li>
          <Parallax bgImage={photo} strength={400}>
            <br/>
            <h1> some content that is displayed above the bgImage </h1>
          </Parallax>
        </li>
    );
  }
}

export default Image
