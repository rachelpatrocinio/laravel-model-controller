@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <img src="{{ Vite::asset('resources/img/multimedia.png')}}" alt="">
    </div>

    <ul class="d-flex flex-wrap">
        @foreach($movies as $movie)
        <li class="col-4 p-3">
            <div class="card text-center p-3">
                <h5>{{ $movie->title }}</h5>
                <p>{{ $movie->original_title}}</p>
                <p>{{ $movie->nationality}}</p>
                <p>{{ $movie->date}}</p>
                <p>{{ $movie->vote}}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection