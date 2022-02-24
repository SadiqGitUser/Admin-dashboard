@extends('user.layout')

@section('title',isset($user) ? 'Update '.$user->name : 'Create user')
@section('content')

<form method="POST"
      @if(isset($user))
      action="{{route('users.update',$user)}}">
      @else
      action="{{route('users.store')}}">
      @endif

    <div class="form-group">
        <label>Name</label>
        <input type="name" value="{{ old('name',isset($user) ? $user->name : null) }}" class="form-control"  name="name"  placeholder="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

       <div class="form-group">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset
        <label>Email address</label>
        <input type="email" value="{{ old('email',isset($user) ? $user->email : null) }}" class="form-control" name="email" placeholder="Enter email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

          <div class="form-group">
              <label>Password</label>
              <input type="password" value="" class="form-control"  name="password"  placeholder="password">
              @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <br>

{{--          AUTORIZATION FUNKSIYASINI BURDA BAGLADIM. --}}
         <div>
             <select name="role" class="form-select" aria-label="Default select example">

                 @foreach($roles as $role)

                     <option value="{{ $role->name}}"}}>
                         {{ $role->name }}
                     </option>

                     @endforeach
             </select>
         </div>

    <br>
    <a type="button" class="btn btn-secondary pull pull-right" href="{{route('users.index')}}">Back</a>
        <button type="submit" class="btn btn-success">Submit</button>


</form>

@endsection
