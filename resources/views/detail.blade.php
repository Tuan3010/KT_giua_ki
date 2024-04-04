@extends('layout')
@section('title', 'Chi tiết')

@section('content')
  
    <h2>{{$user->id}}</h2>
    <h2>{{$user->name}}</h2>
    <h2>{{$user->email}}</h2>
    <h2>{{$user->phone}}</h2>
    <h2>{{$user->image}}</h2>

    
@endsection