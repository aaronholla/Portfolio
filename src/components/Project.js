import React, { Component } from 'react'
import Demo from './Demo.js'

class Project extends Component {
  constructor(props){
    super(props)
    this.state = {
      name: props.name,
      description: props.description,
      languages: props.languages,
      languagesURL: props.languagesURL,
      frameworks: props.frameworks
    }
  }

  componentDidMount(){
         fetch(this.state.languagesURL)
         .then( (response) => {
           return response.json()
         })
         .then((languages)=>{
           this.setState({
              languages: languages
           })
         })
         .catch( (ex) => {
            console.log('parsing failed', ex)
         })
  }

  render() {
    return (
      <ul>
        <li>
          <div className="Project">
            <h2>{this.state.name}</h2>
            <p>{this.state.description}</p>
            <div className="languages">
              <div className="languagnpe">
                {this.state.languages.map((language, index) =>
                      <div className="languageName" key={index}>{language}</div>
                )}
              </div>
            </div>
          </div>
          <Demo name={this.state.name} />
        </li>
        <li>
          {this.props.children}
        </li>
      </ul>
    );
  }
}

export default Project
