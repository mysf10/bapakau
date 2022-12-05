@extends('layouts.main')

@section('page')
    <a href="/home">Back to home</a>

    <article>
      <h2>{{ $book['title'] }}</h2>
      <h5>Author : {{ $book['author'] }}</h5>
      <p>{{ $book['body'] }}</p>
  </article>
@endsection