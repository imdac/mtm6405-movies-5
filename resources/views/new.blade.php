@extends('base')

@section('title', 'New Movie')

@section('content')
<div class="row my-3">
  <div class="col-6">
    
  </div>
  <div class="col-6 d-flex justify-content-end">
   
  </div>
</div>
<div class="row">
  <div class="col">
    <h1 class="display-4">Add Movie</h1>

    <form method="post" action="/" class="bg-light border border-1 p-5">
      @csrf
      <div class="mb-3">
        <label class="form-label" for="movieTitle">Movie Title</label>
        <input type="text" id="movieTitle" name="movie_title" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label" for="movieDirector">Director</label>
        <input type="text" id="movieDirector" name="director" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label" for="movieYear">Year</label>
        <input type="number" id="movieYear" name="year" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label" for="movieGenre">Genre</label>
        <select class="form-select" name="genre_id">
          @foreach (['', 'Fantasy', 'Sci-Fi', 'Action', 'Comedy', 'Drama', 'Horror', 'Romance', 'Family'] as $genre)
          <option value="{{ $loop->index }}">{{ $genre }}</option>
          @endforeach
        </select>
      </div>
      <div class="d-flex">
        <button type="submit" class="btn btn-primary me-3">Add Movie</button>
        <a href="/" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
</div>
@endsection