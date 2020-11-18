@extends('template.app')

@section('page-indicator')
    <div class="container d-flex flex-row" style="margin: 2em auto">
        <a href="javascript:history.back()" class="btn text-light" style="background-color: rgba(245, 246, 248, 0.18)">KEMBALI</a>
        <a href="{{ route('home') }}" class="btn btn-outline-secondary text-light">LIHAT SEMUA FILM</a>
    </div>
@endsection

@section('page-content')
    @foreach ($genre as $genre)
        <div class="container h-100 d-flex flex-column justify-content-center" style="background-color: rgba(245, 246, 248, 0.06); padding: 2em; margin-bottom: 2em">
            <h3 class="text-left text-light" style="margin-bottom: 1em">{{ $genre->name }}</h3>
            <div class="row justify-content-around">
                @foreach ($moviesPerGenre as $movie)
                    <div class="card col-3" style="padding: 1em 1em; background-color: rgba(245, 246, 248, 0.12);">
                        <img src="{{ asset('images/'.$movie->photo) }}" alt="img-thumbnail" class="w-100" style="margin-bottom: 1em">
                        <p class="text-light" style="font-size: 1.25em">{{ $movie->title }}</p>
                        <a href="{{ route('details', ['movie_id' => $movie->id]) }}" class="btn text-light" style="background-color: rgba(245, 246, 248, 0.24)">LIHAT FILM</a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
