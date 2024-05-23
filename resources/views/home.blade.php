@extends('layouts.app')

@section('content')
<h1>Home Page</h1>
<ul>
    @foreach($movies as $movie)
    <li>
        <h3>{{ $movie->title }}</h3>
        <p>{{ $movie->original_title}}</p>
        <p>{{ $movie->nationality}}</p>
        <p>{{ $movie->date}}</p>
        <p>{{ $movie->vote}}</p>
    </li>
    @endforeach
</ul>
@endsection