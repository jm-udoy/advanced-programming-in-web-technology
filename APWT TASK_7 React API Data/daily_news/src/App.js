import React, { Component } from 'react';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';

import Navbar from './pages/Navbar';
import Footer from './pages/Footer';
import AddNews from './pages/AddNews';
import NewsList from './pages/NewsList';
import EditNews from './pages/EditNews';
import HomeNews from './pages/HomeNews';
// import EditStudent from './pages/EditStudent';

// import axios from 'axios';
// axios.defaults.baseURL = "http://localhost:8000/";

function App() {
  return (
    <Router>
      <div className="App">
        <Navbar />
        
        <div className="content">
          <Switch>
            <Route exact path="/">
              {/* <ddUser />A */}
              {/* <NewsList /> */}
              <HomeNews />
            </Route>
            <Route path="/news-list">
              <NewsList />
            </Route>
            <Route path="/add-news">
              <AddNews />
            </Route>
            <Route exact path="/edit-news/:id">
              <EditNews />
            </Route>
            
          </Switch>
        </div>
        <Footer />
      </div>
    </Router>
  );
}

export default App;