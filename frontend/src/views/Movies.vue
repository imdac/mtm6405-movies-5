<template>
  <form class="form" @submit.prevent="searchMovies">
    <input type="search" class="form-control" v-model="search" placeholder="Search">
  </form>
  <section class="movies">
    <a class="movie">
      Movie Title
    </a>
  </section>
</template>

<script>
export default {
  data: function () {
    return {
      movies: [],
      search: ''
    }
  },
  created: function () {
    
  },
  methods: {
    searchMovies: function () {
      
    }
  }
}
</script>