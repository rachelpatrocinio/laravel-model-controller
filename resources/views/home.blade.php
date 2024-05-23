@extends('layouts.app')

@section('content')
<h1>Home Page</h1>
<ul>
    @foreach($movies as $movie)
    <li>{{ $movie->title }}</li>
    @endforeach
</ul>
@endsection