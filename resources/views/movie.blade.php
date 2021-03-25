@extends('base')

@section('title', $movie['movie_title'])

@section('content')
<div class="row my-3">
  <div class="col-6">
    
  </div>
  <div class="col-6 d-flex justify-content-end">
    <a class="btn btn-outline-primary" href="">Edit</a> 
  </div>
</div>
<div class="row">
  <div class="col">
    <h1 class="display-4">{{ $movie['movie_title'] }} ({{ $movie['year'] }})</h1>
    <h4>{{ $movie['director'] }}</h4>

    <p><a href="/">Back</a></p>
  </div>
</div>
@endsection