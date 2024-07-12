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

<div class="container m-5">
  <x-layout message="Sconto del 10% per i nuovi iscritti alla newsletter" />
</div>

<h1>{{ $titleh1 }}</h1>
<p class="title">{{ $description }}</p>
</body>
</html>