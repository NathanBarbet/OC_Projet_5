<div class="form-comments">
  <div class="title-box-2">
    <h3 class="title-left">
      Laisser un commentaire
    </h3>
  </br>
    <h6>
      Votre commentaire sera publier après validation de l'administrateur
    </h6>
  </div>
  <?php
    if (isset($_SESSION['Name']) AND isset($_SESSION['Firstname']) AND isset($_SESSION['Email']))
    {
  ?>
  <?php
  $data = $post;
  ?>
  <form class="form-mf col-md-12" action="index.php?action=addComment&amp;ID=<?= $data->getPostId() ?>" method="post">
    <div class="row">
      <div class="col-lg-12 col-md-12 mb-3">
        <div>
          <textarea class="form-control" id="comment" rows="15" name="comment"></textarea>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div>
          <input type="submit" class="btn btn-primary btn-lg" />
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
