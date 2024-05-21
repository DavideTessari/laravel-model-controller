@extends('layouts.app')

@section('content')
    <div class="container">
        <h1> Hello 🤗🤗 Do you wanna see a movie?</h1>

        <div class="row row-cols-3">
            @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title: {{ $movie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{ $movie->original_title }}</h6>
                  <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                  <p class="card-text">Date: {{ $movie->date }}</p>
                  <p class="card-text">Vote: {{ $movie->vote }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
