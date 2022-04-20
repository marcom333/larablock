@extends('plantilla')


@section('title')
    User-view
@endsection

@section('head')
    <link rel="stylesheet" href="{{asset('js/myfile.js')}}">
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Name</td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td scope="row">Email</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td scope="row">Tenant</td>
                <td>{{$user->tenant_id}}</td>
            </tr>
        </tbody>
    </table>
@endsection