@extends('plantilla')

@section('title', "User-create")

@section('content')
    <h1>T index</h1>

    @foreach (auth()->user()->transactions as $item)
        {{$item->texto}} <br>
    @endforeach


    {{"<div>Hola</div>"}}
    {!!"<div>Hola</div>"!!}

    <!--{ {$transactions->links()}}-->

@endsection