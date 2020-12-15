import logo from './logo.svg';
import './App.css';
import {Demo} from "./Demo";
import React from "react";
import axios from 'axios';
class App extends React.Component {
  constructor() {
    super();

    // an example array of items to be paged
    // var exampleItems = [...Array(150).keys()].map(i => ({ id: (i+1), name: 'Item ' + (i+1) }));

    this.state = {
      exampleItems: [],
      pageOfItems: []
    };

    // bind function in constructor instead of render (https://github.com/yannickcr/eslint-plugin-react/blob/master/docs/rules/jsx-no-bind.md)
    this.onChangePage = this.onChangePage.bind(this);
  }

  componentWillMount() {
      axios.get('http://localhost:8080/categories').then(res => {

      })
  }

  onChangePage(pageOfItems) {
    // update state with new page of items
    this.setState({ pageOfItems: pageOfItems });
  }
  render() {

    return (
        <div className="App">
          {/*<header className="App-header">*/}
            {/*<img src={logo} className="App-logo" alt="logo"/>*/}

            {/*<p>*/}
            {/*  Edit <code>src/App.js</code> and save to reload.*/}
            {/*</p>*/}
            {/*<a*/}
            {/*    className="App-link"*/}
            {/*    href="https://reactjs.org"*/}
            {/*    target="_blank"*/}
            {/*    rel="noopener noreferrer"*/}
            {/*>*/}
            {/*  Learn React*/}
            {/*</a>*/}
          {/*</header>*/}
          {this.state.pageOfItems.map(item =>
              <div key={item.id}>{item.name}</div>
          )}
          <Demo items={this.state.exampleItems} onChangePage={this.onChangePage}/>

        </div>
    );
  }
}

export default App;
