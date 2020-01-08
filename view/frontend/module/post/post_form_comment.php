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
  foreach ($post as $data)
  {
  ?>
  <form class="form-mf" action="index.php?action=addComment&amp;ID=<?= $data->getPostId() ?>" method="post">
    <div class="row">
      <div class="col-md-12 mb-3">
        <div>
          <textarea id="comment" rows="20" name="comment"></textarea>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div>
          <input type="submit" />
        </div>
      </div>
    </div>
  </form>
<?php } ?>
<?php }
  else
  {
    echo 'Vous devez être connecté !';
    echo '<br />  <a href="login"> Cliquer ici</a>';
  }
?>
</div>
</div>
