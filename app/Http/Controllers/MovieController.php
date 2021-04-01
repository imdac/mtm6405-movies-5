<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index () {
        $query = request('query');

        if ($query) {
            // do a search
            $movies = Movie::where('movie_title', 'like', "%{$query}%")->get();
        } else {
            // return all movies
            $movies = Movie::all()->toArray();
        }

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

    public function create () {
        return view('new');
    }

    public function store () {
        $movie = new Movie;
        $movie->movie_title = request('movie_title');
        $movie->director = request('director');
        $movie->year = request('year');
        $movie->genre_id = request('genre_id');
        $movie->save();

        return redirect('/');
    }

    public function edit ($movie_id) {
        $movie = Movie::find($movie_id);

        return view('edit', ['movie' => $movie]);
    }

    public function update ($movie_id) {
        $movie = Movie::find($movie_id);
        $movie->movie_title = request('movie_title');
        $movie->director = request('director');
        $movie->year = request('year');
        $movie->genre_id = request('genre_id');
        $movie->save();

        return redirect("/movie/{$movie_id}");
    }

    public function destroy ($movie_id) {
        $movie = Movie::find($movie_id);
        $movie->delete();

        return redirect('/');
    }
}
