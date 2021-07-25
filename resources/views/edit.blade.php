<x-layout>
  <x-slot name="title">Edit Movie</x-slot>

 
    <h2 class="form-title">Edit Movie</h2>
    <form class="form" method="post">
      <input type="hidden" name="movie_id" value="">
      <input type="text" class="form-control" name="movie_title" placeholder="Movie Title" required 
        value="">
      <input type="text" class="form-control" name="director" placeholder="Director" required value="">
      <input type="number" class="form-control" name="year" placeholder="Year" required value="">
      <select class="form-control" name="genre_id">
        @foreach ($genres as $genre)
          <option value="{{ $genre['genre_id'] }}">{{ $genre['genre_title']; }}</option>
        @endforeach
      </select>
      <button type="submit" class="button">Update Movie</button>
    </form>
    <form class="form" method="post" action="">
      <input type="hidden" name="movie_id" value="">
      <button type="submit" class="button danger">Delete Movie</button>
    </form>


</x-layout>