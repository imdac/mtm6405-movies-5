<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? 'Movie Mayhem' }}</title>
  <link rel="stylesheet" href="/app.css">
</head>
<body>
  <main class="main">
    <header class="header">
      <h1 class="header-title">Movie Mayhem</h1>
      <nav class="nav">
        <a class="nav-link" href="/">Movies</a>
        <a class="nav-link" href="/create">New</a>
      </nav>
    </header>
    
    {{ $slot }}
  </main>
</body>
</html>