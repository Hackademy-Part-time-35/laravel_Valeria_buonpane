<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('Stili/presto.css') }}">
	<title>{{$article ['title']}}</title>
</head>
<body>
	<h1>{{ $article['title']}}</h1>

	<h2>{{ $article['categoria']}}</h2>

	<p>{{ $article['description']}}</p>

</body>
</html>