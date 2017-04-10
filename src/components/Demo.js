import React, { Component } from 'react'

class Demo extends Component {
  render() {
    return (
      <div className="Demo">
        <span>{this.props.name}.gif</span>
      </div>
    );
  }
}

export default Demo
