
@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Blog Posts</h1>

<article>
<h2>{{ $post["title"]}}</h2>

<h2>{{ $post["body"]}}</h2>
</article>
<a href="/blog">Back Home</a>
@endsection