<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
    <div class = "container">
    <br><br>
     <h1>Delete User</h1>
    <form action= "{{route('deleteUser')}}" class "form-group" method = "post">
        {{csrf_field()}}
        <div class ="col-md-4 form-group">
            <span>ID</span>
            <input type="text" name="id" value="{{$user->id}}" class="form-control" readonly>
            <span>Name</span>
            <input type="text" name="name" value = "{{$user->name}}" class = "form-control"><br>
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="password" value = "{{$user->password}}" class = "form-control"><br>
            @error('name')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class ="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value = "{{$user->phone}}" class = "form-control"><br>
            @error('phone')
                <span class = "text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class ="col-md-4 form-group">
        <span>Account Type</span>
        <input type="text" name="accType" value = "{{$user->accType}}" class = "form-control"><br>
        @error('email')
            <span class = "text-danger">{{$message}}</span>
        @enderror
        </div>
        <input type = "submit" class="btn btn-primary" value = "Delete">
    </form>
    </div>
    </body>
    </html>
