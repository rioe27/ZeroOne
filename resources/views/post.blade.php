
@extends('layouts/main')

@section('container')

@foreach ($posts as $coba)
<article class="mb-3">
 <h2>
 <a href="/posts/{{$coba->slug }}">
         {{  $coba->title  }} </a>
</h2>
  <p>{{ $coba->excerpt  }}  </p>
</article> 
@endforeach
 @endsection