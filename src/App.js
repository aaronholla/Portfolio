import React, { Component } from 'react'
import './App.css'
import ProjectList from './components/ProjectList'

class App extends Component {
  render() {
    return (
      <div className="App">
        <div className="App-header">
        </div>
        <ProjectList />
        <div className="Footer">
          {/* <Contact /> */}
        </div>
      </div>
    );
  }
}

export default App
