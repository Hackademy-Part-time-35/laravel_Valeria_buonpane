<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('Stili/presto.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>{{ $title }}</title>
</head>
<body>
 
<x-navbar />

<h1>{{ $titleh1 }}</h1>
<p>{{ $description }}</p>

@if($titleIsVisible)
        <h1 class="title">{{ $title }}</h1>
    @else
        <h1>La variabile $titleIsVisible è false</h1>
    @endif

{{-- Modo di aggiungere un commento in Blade --}}

<div class="container m-5">
  <x-layout message="Sconto del 10% per i nuovi iscritti alla newsletter" />
</div>

<div class="container">
<div class="row g-3">
  @foreach($articles as $index => $article)
        @if($article['visible'])
        <div class="col lg-3">
          <x-card 
            :category="$article['category'] " 
            :title=" $article['title'] " 
            :route=" route('articles.show', $index) "
          />
        </div>
        @endif
    @endforeach
  </div>

</div>
  
</body>
</html>