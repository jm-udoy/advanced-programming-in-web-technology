import React, { Component } from 'react'
import { Link } from 'react-router-dom';

import axios from 'axios';

import swal from 'sweetalert';

class HomeNews extends Component {

    state = {
        news: [],
        loading: true,
    }

    async componentDidMount(){
        const res = await axios.get('http://127.0.0.1:8000/api/news');
        if(res.data.status === 200)
        {
            this.setState({
                news: res.data.news,
                loading: false,
            });
        }
    }

    

    render() {

        var news_HTMLTABLE = "";
        if(this.state.loading)
        {
            news_HTMLTABLE = <h2>Loading...</h2>
        }
        else
        {
            news_HTMLTABLE =
            this.state.news.map( (item) => {
                return(
                    <div key={item.id}>
                        <div className="card bg-dark m-3">
                            <div className="card-header">
                                <img src={require('./images/'+item.image_path)} style={{width: "100%", height:"200px"}}/>
                            </div>
                            <div className="card-body">
                                <h5 className="card-title text-light">{item.title}</h5>
                                <p className="card-text text-light">{item.description}</p>
                                <a href="#" className="btn btn-warning">Read More</a>
                            </div>
                        </div>
                    </div>
                );
            });
        }

        return (
            <div className="container">
                <div className="row">
                    <div className="col-12">
                         {news_HTMLTABLE}
                    </div>
                </div>
            </div>
        );
    }
}

export default HomeNews;