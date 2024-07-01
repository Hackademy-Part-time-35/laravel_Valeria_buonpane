<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
</head>
<body>
 
<nav>
<a href="{{ route('welcome') }}">Home</a>
  <a href="{{ route('articles') }}">Articoli</a>
  <a href="{{ route('about_us') }}">Chi siamo</a>
  <a href="{{ route('contacts') }}">Contatti</a>
</nav>

<h1>{{ $titleh1 }}</h1>
<p>{{ $description }}</p>

@foreach($articles as $index => $article)
<li>
  <a href="{{ route('articles.show', $index) }}">{{ $article['title'] }}</a>
</li>
<li>
  <a href="{{ route('articles.show', $index) }}">{{ $article['title'] }}</a>
</li>
<li>
  <a href="{{ route('articles.show', $index) }}">{{ $article['title'] }}</a>
</li>
@endforeach

</body>
</html>