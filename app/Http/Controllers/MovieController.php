<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index () {
        $movies = Movie::all();

        return view('movies', ['title'=>'Movies', 'movies' => $movies]);
    }

    public function show ($movie_id) {
        $movie = Movie::find($movie_id);

        return view('movie', ['movie' => $movie]);
    }

    public function search ($query) {
        $movies = Movie::where('movie_title', 'like', "%{$query}%")->get();
        
        return view('movies', ['title'=>'Movies', 'movies' => $movies]);
    }
}
