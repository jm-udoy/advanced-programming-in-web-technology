import React from 'react'
import { Link } from 'react-router-dom';

export const AddUser = () => {
  return (
    <div className="container">
      <div className="row">
        <div className="col-6 offset-3">
          <div className="card">
            <div className="card-header">
              <h4>
                Registar
                <Link to={'/'} className="btn btn-warning float-end">Go Back</Link>
              </h4>
            </div>
            <div className="card-body bg-warning">
              <form  >
                <div className="form-group mb-3">
                  <label>Name</label>
                  <input type="text" name="name"  className="form-control" />
                  <span className="text-danger"></span>
                </div>
                <div className="form-group mb-3">
                  <label>Student Course</label>
                  <input type="text" name="course" className="form-control" />
                  <span className="text-danger"></span>
                </div>
                <div className="form-group mb-3">
                  <label>Student Email</label>
                  <input type="text" name="email"  className="form-control" />
                  <span className="text-danger"></span>
                </div>
                <div className="form-group mb-3">
                  <label>Student Phone</label>
                  <input type="text" name="phone"  className="form-control" />
                  <span className="text-danger"></span>
                </div>

                <div className="form-group mb-3">
                  <button type="submit" className="btn btn-dark">Registar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

export default AddUser;