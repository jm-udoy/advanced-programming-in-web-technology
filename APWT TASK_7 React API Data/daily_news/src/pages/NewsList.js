import React, { Component } from 'react'
import { Link } from 'react-router-dom';

import axios from 'axios';

import swal from 'sweetalert';

class NewsList extends Component {

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

    deleteNews = (e, id) => {

        const thisClicked = e.currentTarget;
        thisClicked.innerText = "Deleting";

        const res = axios.delete(`http://127.0.0.1:8000/api/delete-news/${id}`);
        if(res.data.status === 200)
        {
            // console.log(res.data.message);
            swal("Deleted!",res.data.message,"success");
            thisClicked.closest("tr").remove();
            thisClicked.innerText = "Delete";

            
            
        }
    }

    render() {

        var news_HTMLTABLE = "";
        if(this.state.loading)
        {
            news_HTMLTABLE = <tr><td colSpan="8"><h2>Loading...</h2></td></tr>
        }
        else
        {
            news_HTMLTABLE =
            this.state.news.map( (item) => {
                return(
                    <tr key={item.id}>
                        <td>{item.id}</td>
                        <td>{item.title}</td>
                        <td>{item.description}</td>
                        <td>{item.priority}</td>
                        <td>{item.image_path}</td>
                        <td>{item.category}</td>
                        <td>
                            <Link to={`edit-news/${item.id}`} className="btn btn-success btn-sm">Edit</Link>
                        </td>
                        <td>
                            <button type='button' onClick={(e) => this.deleteNews(e, item.id)} className='btn btn-danger btn-sm'>Delete</button>
                        </td>
                    </tr>
                );
            });
        }

        return (
            <div className="container">
                <div className="row">
                    <div className="col-12">
                        <div className="card">
                            <div className="card-header">
                                <h4>
                                    News List
                                    <Link to={'add-news'} className="btn btn-warning float-end">Add News</Link>
                                </h4>
                            </div>
                            <div className="card-body">
                                {/* table start */}
                                <table className='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Priority</th>
                                            <th>Image Path</th>
                                            <th>Category</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {news_HTMLTABLE}
                                    </tbody>
                                </table>
                                {/* table end */}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default NewsList;