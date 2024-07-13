<x-layout2 :title="$article['title']">

	<a href="{{ route('articles')}}">Indietro</a>
	<!-br per andare a capo ->
	<br></br> 
		
	<span>{{ $article['category']}}</span>
		
	<h1>{{ $article['title']}}</h1>

	<p>{{ $article['description']}}</p>

</x-layout2>