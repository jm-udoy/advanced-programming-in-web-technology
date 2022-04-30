<html>

    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
   </style>
   </head>
    
    <body >

    <section>

    <div class="container py-5 h-100">

    <h2 style="text-align:center;">Login</h2> 

        <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">


            <form action= "{{route('login')}}" class="form-group" method = "post">
            {{csrf_field()}}

            <!-- User Name input -->
            <div class="form-outline mb-4">
                <input type="text" name="userName" value = "{{old('userName')}}" class="form-control form-control-lg" />
                <label class="form-label" >User name</label>
                @error('userName')
                    <span class = "text-danger">{{$message}}</span>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" value = "{{old('password')}}" class="form-control form-control-lg" />
                <label class="form-label">Password</label>
                @error('password')
                    <span class = "text-danger">{{$message}}</span>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        </div>
    </div>
    </section>
        </body>
</html>