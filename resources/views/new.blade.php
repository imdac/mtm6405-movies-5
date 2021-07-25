<x-layout>
  <x-slot name="title">New Movie</x-slot>

  <h2 class="form-title">New Movie</h2>
  <form class="form" method="post">
    <input type="text" class="form-control" name="movie_title" placeholder="Movie Title" required>
    <input type="text" class="form-control" name="director" placeholder="Director" required>
    <input type="number" class="form-control" name="year" placeholder="Year" required>
    <select class="form-control" name="genre_id">
      @foreach ($genres as $genre)
          <option value="{{ $genre['genre_id'] }}">{{ $genre['genre_title']; }}</option>
      @endforeach
    </select>
    <button type="submit" class="button">Add Movie</button>
  </form>

</x-layout>