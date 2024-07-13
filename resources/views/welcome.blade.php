<x-layout2 :title="$title"> 

<h2>{{$title}}</h2>

<div class="container m-5">
  <x-layout :message="$message" />
</div>

<p>{{ $description }}</p>

</x-layout2>