@extends('layouts.main')

@section('container')
  <h1 class='mb-5'>Post Categories</h1>

  @foreach ($categories as $category)
      <h2>
        <a href="/category/{{ $category->slug }}">{{ $category->name }}</a>
      </h2>
  @endforeach

@endsection
