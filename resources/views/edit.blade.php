@extends('base')

@section('title', 'Edit Movie')

@section('content')
<div class="row my-3">
  <div class="col-6">
    
  </div>
  <div class="col-6 d-flex justify-content-end">
   
  </div>
</div>
<div class="row">
  <div class="col">
    <h1 class="display-4">Edit Movie</h1>

    <form method="post" action="/movie/{{ $movie['movie_id'] }}" class="bg-light border border-1 p-5">
      @csrf
      @method('put')
      <div class="mb-3">
        <label class="form-label" for="movieTitle">Movie Title</label>
        <input type="text" id="movieTitle" name="movie_title" class="form-control"
          value="{{ $movie['movie_title'] }}">
      </div>
      <div class="mb-3">
        <label class="form-label" for="movieDirector">Director</label>
        <input type="text" id="movieDirector" name="director" class="form-control"
          value="{{ $movie['director'] }}">
      </div>
      <div class="mb-3">
        <label class="form-label" for="movieYear">Year</label>
        <input type="number" id="movieYear" name="year" class="form-control"
          value="{{ $movie['year'] }}">
      </div>
      <div class="mb-3">
        <label class="form-label" for="movieGenre">Genre</label>
        <select class="form-select" name="genre_id">
          @foreach (['', 'Fantasy', 'Sci-Fi', 'Action', 'Comedy', 'Drama', 'Horror', 'Romance', 'Family'] as $genre)
          <option value="{{ $loop->index }}"
            @if ($movie['genre_id'] === $loop->index) selected @endif>{{ $genre }}</option>
          @endforeach
        </select>
      </div>
      <div class="d-flex">
        <button type="submit" class="btn btn-primary me-3">Update Movie</button>
        <a href="" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
    <form method="post" action="/movie/{{ $movie['movie_id'] }}">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger mt-3">Delete Movie</button>
    </form>
  </div>
</div>
@endsection