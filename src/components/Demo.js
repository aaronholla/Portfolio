import React, { Component } from 'react'

import * as demos from '../data/demos'

class Demo extends Component {
  constructor(props){
    super(props)
    this.state = {
      demos: Object.keys(demos).map(key => demos[key])
    }
  }

  render() {
    return (
      <div>
        <img className="DemoAnimation" alt="Demo" src={this.state.demos[this.props.demoIndex]} />
      </div>
    );
  }
}

export default Demo
