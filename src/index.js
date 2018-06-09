import React, { Component } from "react"
import ReactDOM from "react-dom"
import "./index.css"
import About from "./components/About"
import ProjectList from "./components/ProjectList"

class App extends Component {
  render() {
    return (
      <div className="App">
        <About />
        <ProjectList />
      </div>
    )
  }
}

ReactDOM.render(<App />, document.getElementById("root"))
