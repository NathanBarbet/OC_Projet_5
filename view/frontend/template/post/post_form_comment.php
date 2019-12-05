<div class="form-comments">
  <div class="title-box-2">
    <h3 class="title-left">
      Laisser un commentaire
    </h3>
  </div>
  <form class="form-mf" action="index.php?action=addComment&amp;ID=<?= $post['ID'] ?>" method="post">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div>
          <label for="author">Auteur</label><br />
          <input type="text" id="author" name="author" />
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div>
          <label for="comment">Commentaire</label><br />
          <textarea id="comment" name="comment"></textarea>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div>
          <input type="submit" />
        </div>
      </div>
    </div>
  </form>
</div>
</div>
