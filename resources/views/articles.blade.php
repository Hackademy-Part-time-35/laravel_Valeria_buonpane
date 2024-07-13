<x-layout2 :title="$titleh1">

<h1>{{ $titleh1 }}</h1>
<p>{{ $description }}</p>

@if($titleIsVisible)
        <h1 class="title">{{ $title }}</h1>
    @else
        <h1>La variabile $titleIsVisible è false</h1>
    @endif

{{-- Modo di aggiungere un commento in Blade --}}

<div class="container m-5">
  <x-layout :message="$message" />
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
  

</x-layout2>