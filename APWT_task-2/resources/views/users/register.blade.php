<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
    <div class = "container">
    <br><br>
     <h1>Registration Page</h1>
    <form action= "{{route('register')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value = "{{old('name')}}" class = "form-control"><br>
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value = "{{old('dob')}}" class = "form-control"><br>
            @error('dob')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value = "{{old('phone')}}" class = "form-control"><br>
            @error('phone')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value = "{{old('email')}}" class = "form-control"><br>
        @error('email')
            <span class = "text-danger">{{$message}}</span>
        @enderror
        </div>
        <input type = "submit" class="btn btn-primary" value = "Submit">
    </form>
    </div>
    </body>
    </html>
