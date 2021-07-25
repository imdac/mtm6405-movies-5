<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MovieController extends Controller
{
    public function index () {
        $search = request('search');

        if ($search) {
            $movies = Movie::where('movie_title', 'like', "%$search%")
                ->orWhere('director', 'like', "%$search%")->get();
        } else {
            $movies = Movie::all();
        }
        
        return view('home', ['movies' => $movies]);
    }

    public function show ($id) {
        $movie = Movie::find($id);
        return view('movie', $movie);
    }

    public function create () {
        $genres = Genre::all();
        return view('new', ['genres' => $genres]);
    }

    public function edit () {
        $genres = Genre::all();
        return view('edit', ['genres' => $genres]);
    }
}
