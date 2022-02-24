@extends('layouts.dashboard')

@section('title','İstifadəçilər')
@section('content')
    @role('Inzibatci')
    <a class="btn btn-primary btn-sm"  role="button" href="{{route('users.create')}}"><i class="fa-solid fa-plus"></i> Əlavə Et</a><br><br>
    @endrole
    <table class="table table-sm ">


            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Idarəetmə</th>

            </tr>
            </thead>

            <tbody>
            @foreach( $users as $user )
                <tr>

                    <td>
                        <a href="{{route('users.show',$user)}}">{{$user->name }}</a>
                    </td>
                    <td>
                        <a href="{{route('users.show',$user)}}">{{$user->email }}</a>
                    </td>
                    <td>
                        @foreach($user->roles as $role)
                            {{ $role->name }}
                        @endforeach
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $user )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a type="button" class="btn btn-warning btn-sm" href="{{ route('users.edit', $user )}}"><i class="fa-solid fa-pen-to-square"></i> Editlə</a>
                            <button class="btn btn-danger btn-sm" type="submit"><i class="fa-solid fa-trash-can"></i> Sil</button>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>


    </table>

    {{ $users->links() }}




@endsection
