const Movie = {
  props: ['id'],
  data: function () {
    return {
      movie: {
        movie_title: '',
        director: '',
        year: ''
      }
    }
  },
  template: `
  <section class="row">
    <div class="col-6 my-3">
      <router-link to="/" class="text-decoration-none">&lt; Movies</router-link>
    </div>
    <div class="col-6 d-flex justify-content-end my-3">
      <router-link :to="'/movie/' + id + '/edit'"  class="text-decoration-none">Edit</router-link>
    </div>
    <div class="col-12">
      <h1 class="display-4">{{ movie.movie_title }} ({{ movie.year }})</h1>
      <h4>{{ movie.director }}</h4>
    </div>
  </section>
  `
}
