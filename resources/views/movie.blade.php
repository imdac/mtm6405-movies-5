<x-layout>
  <x-slot name="title">{{ $movie_title }}</x-slot>

  <section class="movie-details">
    <a class="movie-edit" href="/movie/{{ $movie_id }}/edit">Edit</a>
    <h2 class="movie-title">
      {{ $movie_title }} <span class="movie-year">({{ $year }})</span></h2>    
    <p>Director<br>
    <strong>{{ $director }}</strong></p>
  </section>

</x-layout>