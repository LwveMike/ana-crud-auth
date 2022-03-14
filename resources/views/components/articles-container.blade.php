@props(['tweets'])


<div class="articles-container">

@foreach ($tweets as $tweet)

<x-article :tweet="$tweet" />

@endforeach
</div>