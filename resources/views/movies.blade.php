@extends('base')

@section('title', $title)

@section('content')
<div class="row my-3">
  <div class="col-6">
    <form>
      <input class="form-control" type="search" name="query" placeholder="Search movie...">
    </form>
  </div>
  <div class="col-6 d-flex justify-content-end">
    <a class="btn btn-outline-primary" href="/create">New</a> 
  </div>
</div>
<div class="row">
  <div class="col">
    <h1 class="display-4">{{ $title }}</h1>
    <ul class="list-group">
      @foreach ($movies as $movie) 
        <a class="list-group-item list-group-item-action"href="/movie/{{ $movie['movie_id'] }}">
          {{ $movie['movie_title'] }}
        </a>
      @endforeach
    </ul>
  </div>
</div>

@endsection 
