@php
  $articles = [1, 2, 3];
@endphp
<div class="articles-container">

@foreach ($articles as $article)

<x-article />

@endforeach
</div>