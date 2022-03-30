
@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{$post->title}}</h1>
<p> By. Jancokers in{{ $post->category->name }}</p>
{{!! $post->body!!}}
<a href="/blog">Back Home</a>
@endsection