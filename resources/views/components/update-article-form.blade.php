<form class="add-article-form" method="POST" action="">
  @csrf
  <div class="form-content">
    <h2 class="form-content-title">Your tweet :</h2>
    <textarea name="body" cols="64" rows="4" class="article-input"></textarea>
  </div>

  <div class="form-actions">
    <button class="post-button">
      <i class="fas fa-paper-plane"></i>
    </button>
  </div>

</form> 