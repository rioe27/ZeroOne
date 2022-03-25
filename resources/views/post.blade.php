
@extends('layouts/main')

@section('container')

@foreach ($posts as $coba)
<article class="mb-3">
 <h2>
 <a href="/posts/{{$coba["slug"] }}">
         {{  $coba['title']  }} </a>
    </h2>
  <h4>By: {{ $coba['author'] }}</h4>
  <p>{{ $coba['body']  }}  </p>
</article> 
@endforeach
 @endsection