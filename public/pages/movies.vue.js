const Movies = {
  data: function () {
    return {
      movies: []
    }
  },
  template: `
  <section class="row">
    <div class="col-6 my-3">
      <form>
        <input class="form-control" type="search" name="query" placeholder="Search movie...">
      </form>
    </div>
    <div class="col-6 d-flex justify-content-end my-3">
      <router-link to="/create" class="btn btn-outline-primary">New</router-link>
    </div>
    <div class="col-12">
      <h1 class="display-4">Movies</h1>
      <ul class="list-group">
        <li class="list-group-item" v-for="movie in movies">
          <router-link :to="'/movie/' + movie.movie_id" class="text-decoration-none">{{ movie.movie_title }}</router-link>
        </li>
      </ul>
    </div>
  </section>
  `
}
