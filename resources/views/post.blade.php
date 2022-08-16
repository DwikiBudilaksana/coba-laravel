@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By. Made Dwiki Budi Laksana in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection