<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('Stili/presto.css') }}">
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

@if($titleIsVisible)
        <h1 class="title">{{ $title }}</h1>
    @else
        <h1>La variabile $titleIsVisible è false</h1>
    @endif

{{-- Modo di aggiungere un commento in Blade --}}

@foreach($articles as $index => $article)
        @if($article['visible'])
        <li>
            <a href="{{ route('articles.show', $index) }}">{{ $article['category'] }} - {{ $article['title'] }}</a>
        </li>
        @endif
    @endforeach

</body>
</html>