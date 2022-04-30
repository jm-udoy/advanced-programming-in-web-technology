import { render } from '@testing-library/react';
import axios from 'axios';
import React, { Component } from 'react'
import { Link } from 'react-router-dom';
import swal from 'sweetalert';


class EditNews extends Component {

    state = {
        title: '',
        description: '',
        priority: '',
        image_path: '',
        category: '',
    }

    handleInput = (e) => {
        this.setState({
            [e.target.name]: e.target.value
        });
    }

    async componentDidMount() {

        

        const news_id = this.props.match.params.id;
        // console.log(news_id);
        const res = await axios.get(`http://127.0.0.1:8000/api/edit-news/${news_id}`);
        if(res.data.status === 200)
        {
            swal({
                title: "Updated!",
                text: res.data.message,
                icon: "success",
                button: "OK!",
            });
          
            this.setState({
                title: res.data.news.title,
                description: res.data.news.description,
                priority: res.data.news.priority,
                image_path: res.data.news.image_path,
                category: res.data.news.category,
            });
        }
    }

    updateNews = async (e) => {
        e.preventDefault();

        const news_id = this.props.match.params.id;
        const res = await axios.put(`http://127.0.0.1:8000/api/update-news/${news_id}`, this.state);
        if(res.data.status === 200)
        {
          
            console.log(res.data.message);
            this.setState({
                title: '',
                description: '',
                priority: '',
                image_path: '',
                category: '',
            });
        }
    }

    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-6 offset-3">
                        <div className="card">
                            <div className="card-header">
                                <h4>
                                    Edit News
                                    <Link to={'/'} className="btn btn-warning float-end">← BACK</Link>
                                </h4>
                            </div>
                            <div className="card-body">
                                {/* form start */}
                                <form onSubmit={this.updateNews}>
                                    <div className='form-group mb-3'>
                                        <label>Title</label>
                                        <input type="text" name='title' onChange={this.handleInput} value={this.state.title} className='form-control' />
                                    </div>
                                    <div className='form-group mb-3'>
                                        <label>Description</label>
                                        <input type="text" name='description' onChange={this.handleInput} value={this.state.description} className='form-control' />
                                    </div>
                                    <div className='form-group mb-3'>
                                        <label>Priority</label>
                                        <input type="text" name='priority' onChange={this.handleInput} value={this.state.priority} className='form-control' />
                                    </div>
                                    <div className='form-group mb-3'>
                                        <label>Image Path</label>
                                        <input type="text" name='image_path' onChange={this.handleInput} value={this.state.image_path} className='form-control' />
                                    </div>
                                    <div className='form-group mb-3'>
                                        <label>Category</label>
                                        <input type="text" name='category' onChange={this.handleInput} value={this.state.category} className='form-control' />
                                    </div>

                                    <div className='form-group mb-3'>
                                        <button type='submit' className='btn btn-warning'>Update News</button>
                                    </div>
                                </form>
                                {/* form end */}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default EditNews;