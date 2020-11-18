@extends('template.app')

@section('page-indicator')
    <div class="container" style="margin: 2em auto">
        <h1 class="text-light">HOME</h1>
    </div>
@endsection

@section('page-content')
    @foreach ($genres as $genre)
        <div class="container-fluid h-100 d-flex flex-column justify-content-center" style="background-color: rgba(245, 246, 248, 0.06); padding: 2em; margin-bottom: 2em">
            <div class="d-flex flex-row justify-content-between" style="margin-bottom: 1em">
                <h3 class="text-left text-light">{{ $genre->name }}</h3>
                <a href="{{ route('genre', ['genre' => $genre->id]) }}" class="btn btn-outline-secondary text-light">LIHAT SELENGKAPNYA</a>
            </div>
            <div class="row justify-content-around">
                @foreach ($movies as $movie)
                    @if ($movie->genre_id == $genre->id)
                        <div class="card col-3" style="padding: 1em 1em; background-color: rgba(245, 246, 248, 0.12);">
                            <img src="{{ asset('images/'.$movie->photo) }}" alt="img-thumbnail" class="w-100" style="margin-bottom: 1em">
                            <p class="text-light" style="font-size: 1.25em">{{ $movie->title }}</p>
                            <a href="{{ route('details', ['movie_id' => $movie->id]) }}" class="btn text-light" style="background-color: rgba(245, 246, 248, 0.24)">LIHAT FILM</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
