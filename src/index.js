import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import './index.css'
import './App.css'
import ProjectList from './components/ProjectList'
import About from './components/About'

class App extends Component {
  render() {
    return (
      <div className="App">
        <About />
        <ProjectList />
      </div>
    );
  }
}

ReactDOM.render(
  <App />,
  document.getElementById('root')
);
