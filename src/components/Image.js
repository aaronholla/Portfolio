import React, { Component } from 'react'
import { Parallax } from 'react-parallax'
import * as photos from '../data/images'

class Image extends Component {
  constructor(props){
    super(props)
    this.state = {
      images: Object.keys(photos).map(key => photos[key])
    }
  }

  render() {
    return (
      <Parallax bgImage={this.state.images[this.props.imageIndex]} bgHeight='100vh' strength={500}>
      </Parallax>
    );
  }
}

export default Image
