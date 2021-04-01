const New = {
  data: function () {
    return {
      movie: {
        movie_title: '',
        director: '',
        year: '',
        genre_id: ''
      },
      genres: ['', 'Fantasy', 'Sci-Fi', 'Action', 'Comedy', 'Drama', 'Horror', 'Romance', 'Family']
    }
  },
  template: `
  <section class="d-flex flex-column h-100 pb-5" key="form">
    <div class="d-flex my-3">
      <router-link to="/" class="btn btn-link text-decoration-none">&lt; Movies</router-link>
    </div>
    <div class="col-6 d-flex justify-content-end my-3">
      
    </div>
    <div class="col-12">
      <h1 class="display-4">New Movies</h1>
      <form class="form">
        <div class="p-4">
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control my-3" v-model="movie.movie_title" placeholder="Movie Title">
            </div>
            <div class="col-6">
              <input type="text" class="form-control my-3" v-model="movie.director" placeholder="Director">
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <input type="number" class="form-control my-3" v-model="movie.year" placeholder="1970">
            </div>
            <div class="col-6">
              <select class="form-select my-3" v-model="movie.genre_id">
                <option v-for="(genre, index) in genres" :value="index">{{ genre }}</option>
              </select>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Add Movie</button>
          <router-link to="/" class="btn btn-link text-decoration-none">Cancel</router-link>
        </div>
      </form>
    </div>
  </section>
  `
}
