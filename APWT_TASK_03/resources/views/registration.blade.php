<html>

  <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    
    <style>

        .gradient-custom-3 {
        background: #84fab0;
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
        background: #84fab0;
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }

    </style>
   </head>
    
    <body >

        <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
              <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                      <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Registration</h2>
          
                        <form action= "{{route('registration')}}" class="form-group" method = "post">
                        {{csrf_field()}}

                          <div class="form-outline mb-4">
                            <input type="text" name="journalistName" value = "{{old('journalistName')}}" class="form-control form-control-lg" />
                            <label class="form-label" >Name</label>
                            @error('journalistName')
                                <span class = "text-danger">{{$message}}</span>
                            @enderror
                          </div>
          
                          <div class="form-outline mb-4">
                            <input type="email" name="email" value = "{{old('email')}}" class="form-control form-control-lg" />
                            <label class="form-label" >Email</label>
                            @error('email')
                                <span class = "text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="form-outline mb-4">
                            
                            <label class="form-label" >Gender</label> <br>
                            <input class="form-label" type="radio" name="gender" value="male"> Male
                            <input class="form-label" type="radio" name="gender" value="female"> Female
                            <input class="form-label" type="radio" name="gender" value="other"> Other
                            @error('grnder')
                                <span class = "text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          

                          <div class="form-outline mb-4">
                            <input type="date" name="dob" value = "{{old('dob')}}" class="form-control form-control-lg" />
                            <label class="form-label" >Date Of Birth</label>
                            @error('dob')
                                <span class = "text-danger">{{$message}}</span>
                            @enderror
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" name="phone" value = "{{old('phone')}}" class="form-control form-control-lg" />
                            <label class="form-label" >Phone</label>
                            @error('phone')
                                <span class = "text-danger">{{$message}}</span>
                            @enderror
                          </div>
          
                          <div class="form-outline mb-4">
                            <input type="password" name="password" value = "{{old('password')}}" class="form-control form-control-lg" />
                            <label class="form-label" >Password</label>
                            @error('password')
                                <span class = "text-danger">{{$message}}</span>
                            @enderror
                          </div>
          
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Add</button>
                          </div>

                        </form>
          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    
    </body>
</html>