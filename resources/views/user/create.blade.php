@extends('plantilla')

@section('title', "User-create")

@section('content')
    <h1>Registrar usuario</h1>

    @include('errors')

    <form action="" method="POST">
        @include('user.form', ["user"=>$user])
    </form>

@endsection