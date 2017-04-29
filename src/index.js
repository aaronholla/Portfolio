require('smoothscroll-polyfill').polyfill();
import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import './index.css'
import './App.css'
import ProjectList from './components/ProjectList'
import About from './components/About'

class App extends Component {
  constructor(props){
    super(props)
    this.handleShowProjectClick = this.handleShowProjectClick.bind(this)
  }

  componentDidMount(){

  }

  handleShowProjectClick() {
    ReactDOM.findDOMNode(this.projectsList).scrollIntoView({block: "start", behavior: "smooth"});
  }


  render() {
    return (
      <div className="App">
        <About />
        <div className="viewProjects"><a unselectable="on" onClick={this.handleShowProjectClick}>View Projects</a></div>
        <ProjectList ref={input => this.projectsList = input}/>
      </div>
    );
  }
}

ReactDOM.render(
  <App />,
  document.getElementById('root')
);
