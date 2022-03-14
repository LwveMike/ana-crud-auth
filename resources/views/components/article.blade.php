@props(['tweet'])

<div class="article-container">
  <div class="article-author-details">
    <div class="article-author-name">
      Author : {{ $tweet['owner']->name }}
    </div>
    <div class="article-author-time">
      Posted At : {{ $tweet['created_at']->format('H-i-s')}}
    </div>
  </div>

  <div class="article-content">
    <div class="article-body">
      {{ $tweet['body']}}
    </div>

  </div>


  @if (Auth::user()->id == $tweet['owner']->id)
  <div class="article-options">
    <a class="article-option-edit" href="/update-tweet/{{$tweet['id']}}">
      <i class="fas fa-edit"></i>
</a>

    <a class="article-option-delete" href="/delete-tweet/{{$tweet['id']}}">
     <i class="fa fa-trash"></i>
</a>
  </div>

  @endif
</div>