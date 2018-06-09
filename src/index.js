import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import 'normalize.css'
import './index.css'
import NavBar from './components/NavBar'
import About from './components/About'
import ProjectList from './components/ProjectList'

class App extends Component {
  render() {
    return (
      <div className="App">
        <NavBar />
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
