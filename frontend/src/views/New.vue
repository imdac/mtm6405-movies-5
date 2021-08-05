<template>
  <h2 class="form-title">New Movie</h2>
  <form class="form" method="post">
    <input type="text" class="form-control" v-model="movie.movie_title" placeholder="Movie Title" required>
    <input type="text" class="form-control" v-model="movie.director" placeholder="Director" required>
    <input type="number" class="form-control" v-model="movie.year" placeholder="Year" required>
    <select class="form-control" v-model="movie.genre_id">
      <option 
        v-for="genre in genres"
        :key="genre.genre_id"
        :value="genre.genre_id">{{ genre.genre_title }}</option>
    </select>
    <button type="submit" class="button">Add Movie</button>
  </form>
</template>

<script>
export default {
  data: function () {
    return {
      genres: [],
      movie: {
        movie_title: '',
        director: '',
        year: '',
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
    addMovie: function () {
      
    }
  }
}
</script>