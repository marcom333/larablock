@extends('plantilla')

@section('title', "User-update")

@section('content')
    <h1>Actualizar usuario</h1>

    @include('errors')

    <form action="" method="POST">
        @include('user.form', ["user"=>$user])
    </form>

@endsection