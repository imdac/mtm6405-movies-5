<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://unpkg.com/vue@3"></script>
  <script src="https://unpkg.com/vue-router@4"></script>
</head>
<body>
  <div id="app" class="container">
    <router-view></router-view>
  </div>
  
  <!-- Vue pages and components -->
  <script src="pages/movies.vue.js"></script>
  <script src="pages/movie.vue.js"></script>
  <script src="pages/edit.vue.js"></script>
  <script src="pages/new.vue.js"></script>

  <script src="routes.js"></script>
  <script src="app.js"></script>
</body>
</html>