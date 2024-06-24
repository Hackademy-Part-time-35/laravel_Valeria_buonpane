<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Benvenuto</title>
</head>
<body>
 
<nav>
<a href="{{ route('welcome') }}">Home</a>
  <a href="{{ route('articles') }}">Articoli</a>
  <a href="{{ route('about_us') }}">Chi siamo</a>
  <a href="{{ route('contacts') }}">Contatti</a>
</nav>

<h1>Welcome</h1>
</body>
</html>