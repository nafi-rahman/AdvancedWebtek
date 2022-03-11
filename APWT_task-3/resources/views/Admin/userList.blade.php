@extends('layout.adminApp')
@section('contentAdmin')
    <table class = "table table-border">
        <tr>
            <th>Name</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Account Type</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->accType}}</td>
            <td><a href="/editUser/{{$user->id}}">Edit</a></td>
            <td><a href="/deleteUser/{{$user->id}}">Delete</a></td>
        </tr>
        @endforeach
@endsection
