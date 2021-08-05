<template>
  <section class="movie-details">
    <a class="movie-edit">Edit</a>
    <h2 class="movie-title">
      {{ movie.movie_title }} <span class="movie-year">({{ movie.year }})</span></h2>    
    <p>Director<br>
    <strong>{{ movie.director }}</strong></p>
  </section>
</template>

<script>
export default {
  props: ['id'],
  data: function () {
    return {
      movie: {
        movie_title: 'Movie Title',
        director: 'Movie Director',
        year: 2000,
        genre_id: 1
      }
    }
  },
  created: function () {
    
  }
}
</script>