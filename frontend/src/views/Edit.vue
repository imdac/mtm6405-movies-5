<template>
  <h2 class="form-title">Edit Movie</h2>
  <form class="form" method="post">
    <input type="text" class="form-control" name="movie_title" placeholder="Movie Title" required 
      v-model="movie.movie_title">
    <input type="text" class="form-control" name="director" placeholder="Director" required v-model="movie.director">
    <input type="number" class="form-control" name="year" placeholder="Year" required v-model="movie.year">
    <select class="form-control" name="genre_id" v-model="movie.genre_id">
      <option 
          v-for="genre in genres"
          :key="genre.genre_id"
          :value="genre.genre_id">
          {{ genre.genre_title }}
      </option>
    </select>
    <button type="submit" class="button">Update Movie</button>
  </form>
  <form class="form" method="post">
    <button type="submit" class="button danger">Delete Movie</button>
  </form>
</template>

<script>
export default {
  props: ['id'],
  data: function () {
    return {
      genres: [],
      movie: {
        movie_title: 'Movie Title',
        director: 'Movie Director',
        year: 2000,
        genre_id: 1
      }
    }
  },
  created: function () {
    fetch('/api/genres')
      .then(response => response.json())
      .then(json => this.genres = json)
  },
  methods: {
    updateMovie: function () {
      
    },
    deleteMovie: function () {
      
    }
  }
}
</script>