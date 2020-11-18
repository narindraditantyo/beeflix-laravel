<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieDataController extends Controller
{
    public function index()
    {
        $genres = DB::table('genres')->get();
        $movies = DB::table('movies')->get();

        return view('home', compact('genres', 'movies'));
    }

    public function showPerGenre($id)
    {
        $genre = DB::table('genres')
            ->where('id', $id)
            ->get();
        $moviesPerGenre = DB::table('movies')
            ->where('genre_id', $id)
            ->get();

        return view('genre', compact('genre', 'moviesPerGenre'));
    }

    public function showDetails($id)
    {
        $movieDetails = DB::table('movies')
            ->join('genres', 'movies.genre_id', '=', 'genres.id')
            ->where('movies.id', $id)
            ->select('movies.*', 'genres.name')
            ->get();
        $episodes = DB::table('episodes')
            ->where('movie_id', $id)
            ->paginate(3);

        return view('details', compact('movieDetails', 'episodes'));
    }
}
