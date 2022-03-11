<html>

    <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    </head>
    
    <body style="background-color: #9EC2F8">
    <div class = "container text-center">
    <br><br>
    
    <h2 class="text-primary">LOGIN</h2>
    <br>
    <form action= "{{route('login')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-12 form-group">
            <span>User Name</span>
            <input type="text" name="userName" value = "{{old('userName')}}" class = "form-control">
            @error('userName')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>

        <div class ="col-md-12 form-group">
            <span>Password</span>
            <input type="password" name="password" value = "{{old('password')}}" class = "form-control">
            @error('password')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>
        <br>
        <input type = "submit" class="btn btn-primary" value = "Login"> <br>

        If you don't have an account then <a href="{{route('registration')}}" >Registration</a>
    </form>
    </div>
    </body>
</html>