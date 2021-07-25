<x-layout>
  <form class="form">
    <input type="search" class="form-control" name="search" placeholder="Search">
  </form>
  <section class="movies">
    @foreach ($movies as $movie) 
    <a class="movie" href="/movie/{{ $movie['movie_id'] }}">
      {{ $movie['movie_title']; }}
    </a>
    @endforeach
  </section>

</x-layout>