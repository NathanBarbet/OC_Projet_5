<div class="form-comments">
  <div class="title-box-2">
    <h3 class="title-left">
      Laisser un commentaire
    </h3>
  </div>
  <?php
    if (isset($_SESSION['Name']) AND isset($_SESSION['Firstname']) AND isset($_SESSION['Email']))
    {
  ?>
  <form class="form-mf" action="index.php?action=addComment&amp;ID=<?= $post['ID'] ?>" method="post">
    <div class="row">
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
<?php }
  else
  {
    echo 'Vous devez être connecté !';
    echo '<br />  <a href="login"> Cliquer ici</a>';
  }
?>
</div>
</div>
