
@extends('layouts/main')

@section('container')

@foreach ($posts as $coba)
<article class="mb-3">
 <h2>
 <a href="/posts/{{$coba->id }}">
         {{  $coba->title  }} </a>

  <p>{{ $coba->excerpt  }}  </p>
</article> 
@endforeach
 @endsection