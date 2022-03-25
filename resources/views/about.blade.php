@extends('layouts/main')

 @section('container')
    
    <p>NETWORK</p>
     <h3>{{$name}}</h3>
     <h3>{{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="">
  @endsection
  