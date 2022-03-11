<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body style="background-color: #9EC2F8">
        
    <div class = "container text-center">

     <h2 class="text-uppercase text-primary">Registration</h2>

    <form action= "{{route('registration')}}" class"form-group" method="post">

        {{csrf_field()}}
        <div class ="col-md-12 form-group">
            <span>Name</span>
            <input type="text" name="name" placeholder="Enter your name" value = "{{old('name')}}" class = "form-control">
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>

        <div class ="col-md-12 form-group">
            <span>ID</span>
            <input type="text" name="id" placeholder="Enter your id" value = "{{old('id')}}" class = "form-control">
            @error('id')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>

        <div class ="col-md-12 form-group">
            <span>Date Of Birth</span>
            <input type="date" name="dob" value = "{{old('dob')}}" class = "form-control">
            @error('dob')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>

        <div class ="col-md-12 form-group">
        <span>Email</span>
        <input type="text" name="email" placeholder="Enter your email" value ="{{old('email')}}" class = "form-control">
        @error('email')
            <span class = "text-danger">{{$message}}</span>
        @enderror
        </div>

        <br>

        <div class ="col-md-12 form-group">
            <span>Phone</span>
            <input type="text" name="phone" placeholder="Enter your phone number" value = "{{old('phone')}}" class = "form-control">
            @error('phone')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>

        <div class ="col-md-12 form-group">
            <span>Password</span>
            <input type="text" name="password" placeholder="Enter your password" value = "{{old('password')}}" class = "form-control">
            @error('password')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>

        <input type = "submit" class="btn btn-primary" value ="Register">
    </form>
    </div>
    </body>
    </html>
