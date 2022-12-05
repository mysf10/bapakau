@extends('layouts.main')

@section('page')
    @foreach ($book as $buku)
        <article class="mb-5">
            <h2>
              <a href="/books/{{ $buku["slug"] }}">{{ $buku['title'] }}</a>
            </h2>
            <h5>Author : {{ $buku['author'] }}</h5>
            <p>{{ $buku['body'] }}</p>
        </article>
    @endforeach
@endsection
