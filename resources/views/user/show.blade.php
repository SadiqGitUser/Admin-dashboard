@extends('user.layout')

@section('title','User '.$user->name)
@section('content')
    <a type="button" class="btn btn-secondary" href="{{route('users.index')}}">Back To Users</a>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Show
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{$user->id}}</li>
            <li class="list-group-item">Name: {{$user->name}}</li>
            <li class="list-group-item">Email: {{$user->email}}</li>
            <li class="list-group-item">Created: {{$user->created_at}}</li>
            <li class="list-group-item">Updated: {{$user->updated_at}}</li>
        </ul>
    </div>


    <form action="{{route('users.destroy',$user)}}" method="POST">
        @csrf
        @method('DELETE')
        <a type="button" class="btn btn-warning" href="{{route('users.edit',$user)}}">Edit</a>
        <button class="btn btn-danger" type="submit"> Delete</button>
    </form>

@endsection
