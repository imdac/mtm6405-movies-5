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
          'movie_title' => "Labyrinth", 
          'director' => "Jim Henson", 
          'year' => 1986 
        ],
        [ 
          'movie_title' => "Highlander", 
          'director' => "Russell Mulcahy", 
          'year' => 1986 
        ],
        [ 
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
    return view('welcome');
});
