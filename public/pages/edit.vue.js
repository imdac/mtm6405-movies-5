const Edit = {
  props: ['id'],
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
  <section class="row">
    <div class="col-6 my-3">
      <router-link :to="'/movie/' + movie.movie_id" class="btn btn-link text-decoration-none">&lt; Back</router-link>
    </div>
    <div class="col-6 d-flex justify-content-end my-3">
      
    </div>
    <div class="col-12">
      <h1 class="display-4">Edit Movies</h1>
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

          <button type="submit" class="btn btn-primary">Update Movie</button>
          <router-link to="/" class="btn btn-link text-decoration-none">Cancel</router-link>
        </div>
      </form>
    </div>
    <div class="d-flex mt-auto justify-content-center">
      <button class="btn btn-sm btn-outline-danger">Delete Movie</button>
    </div>
  </section>
  `
}
