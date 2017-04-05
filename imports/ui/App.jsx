import React, { Component, PropTypes } from 'react';
import { Meteor } from 'meteor/meteor';
import { createContainer } from 'meteor/react-meteor-data';
import ReactDOM from 'react-dom';
import Project from './Project.jsx';
import { Projects } from '../api/projects.js';
import Photo from './Photo.jsx';
// import { Accounts } from 'meteor/std:accounts-ui';


class App extends Component {
  constructor(props) {
    super(props);

    // this.state = {
    //   hideCompleted: false,
    // };
  }

  handleSubmit(event) {
    event.preventDefault();

    const email = ReactDOM.findDOMNode(this.refs.emailInput).value.trim();
    const message = ReactDOM.findDOMNode(this.refs.textInput).value.trim();

    // Meteor.call('tasks.insert', text);

    // Clear form
    ReactDOM.findDOMNode(this.refs.emailInput).value = '';
    ReactDOM.findDOMNode(this.refs.textInput).value = '';
  }

  toggleHideCompleted() {
    this.setState({
      hideCompleted: !this.state.hideCompleted,
    });
  }

  renderProjects() {
    return this.props.projects.map(function(project, index){
      return (<Project key={project.id} name={project.name} description={project.description} >
              <Photo index={index}/>
            </Project>);
    });
  }

  render() {
    return (
      <div className="container">
        <header>
          nav will be here
        </header>

        <ul>
          {this.renderProjects()}
        </ul>

        <footer className="section">
          <form className="contact" onSubmit={this.handleSubmit.bind(this)} >
              <input type="text" ref="emailInput" placeholder="John.Doe@example.com" />
              <input type="text" ref="textInput" placeholder="This is a polite message with feedback." />
          </form>
        </footer>
      </div>
    );
  }
}

App.propTypes = {
  projects: PropTypes.array.isRequired,
  // currentUser: PropTypes.object,
};

export default createContainer(() => {
  Meteor.subscribe('projects');

  return {
    projects: Projects.find({}, { sort: { createdAt: -1 } }).fetch(),
    // currentUser: Meteor.user(),
  };
}, App);
