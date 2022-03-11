
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand"href="{{route('adminHome')}}">APWT TASK 3</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('adminHome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contactUs')}}">Contact us</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('addUser') }}">add user</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('userList') }}">userlist</a>
          </li>

          <li class="nav-item">
              <a class="nav-link my-2 my-sm-0" href="{{ route('logOut') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
