<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Movies
|--------------------------------------------------------------------------
|
| This function is used to provide data for the application. This is not
| standard practice.
|
*/
function movies () {
    return [
        [
          'movie_id' => 1,
          'movie_title' => "Labyrinth", 
          'director' => "Jim Henson", 
          'year' => 1986 
        ],
        [ 
          'movie_id' => 2,
          'movie_title' => "Highlander", 
          'director' => "Russell Mulcahy", 
          'year' => 1986 
        ],
        [ 
          'movie_id' => 3,
          'movie_title' => "Alien", 
          'director' => "Ridley Scott", 
          'year' => 1979
        ]
    ];
}


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $movies = movies();
  return view('movies', [
    'title' => 'Movies',
    'movies' => $movies
  ]);
});

Route::get('/movie/{movie_id}', function ($movie_id) {
  $movies = movies();
  
  return view('movie', ['movie' => $movies[array_search($movie_id, array_column($movies, 'movie_id'))]]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
