@extends('plantilla')

@section('title', "Usuarios")

@section('content')
    <h1>Usuarios</h1>

    <a href="{{url('user/create')}}" class="btn btn-success">Registrar</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th colspan="3">OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{url('user/'.$user->id)}}" class="btn btn-info">Ver</a></td>
                    <td><a href="{{url('user/update/'.$user->id)}}" class="btn btn-warning">Editar</a></td>
                    <td>
                        <form action="{{url("user/delete/". $user->id)}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links("pagination::bootstrap-4")}}
@endsection