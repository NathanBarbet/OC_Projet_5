<?php ob_start(); ?>
<div class="main-panel">
<div class="content-wrapper">
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Commentaires
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
    </br></br>
      <div class="row">
        <table class="table table-responsive-sm col-md-12">
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Post</th>
            <th scope="col">Date de publication</th>
            <th scope="col">Commentaire</th>
            <th scope="col">Changer de statut</th>
            <th scope="col">Supprimer</th>
          </tr>
        <?php
           foreach ($comments as $data)
           {
           ?>
             <tr>
                <td><?= htmlspecialchars($data->getName()) ?></td>
                <td><?= htmlspecialchars($data->getFirstname()) ?></td>
                <td><a href="post_<?= htmlspecialchars($data->getPostId()) ?>"> <?= htmlspecialchars($data->getPostTitle()) ?></td>
                <td><?= htmlspecialchars($data->getDate()) ?></td>
                <td><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#message<?php echo $data->getCommentId();?>">Voir le commentaire</button></td>
                <td><?php
                      if ($data->getCommentStatutID() == 1)
                      {
                        ?>
                    <div>
                      <a href="pausecomment_<?= htmlspecialchars($data->getCommentId()) ?>"> <input type="button" class="btn btn-primary btn-lg" value="Mettre en attente"> </a>
                    </div>
                    <?php } ?>
                    <?php
                      if ($data->getCommentStatutID() == 2)
                      {
                        ?>
                        <div>
                          <a href="publishcomment_<?= htmlspecialchars($data->getCommentId()) ?>"> <input type="button" class="btn btn-primary btn-lg" value="Publier"> </a>
                        </div>
                      <?php } ?>
                </td>
                <td>
                  <div>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#delete<?php echo $data->getCommentId();?>">Supprimer</button>
                  </div>
                </td>
             </tr>
             <div id="message<?php echo $data->getCommentId();?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title title-box text-center">Commentaire</h4>
                </div>
                <div class="modal-body">
                  <p>
                  <?php echo $data->getContent();?>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Fermer</button>
                </div>
              </div>

            </div>
          </div>
          <div id="delete<?php echo $data->getCommentId();?>" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title title-box text-center">Etes vous sur ?</h4>
              </div>
              <div class="modal-body">
              </div>
              <div class="modal-footer">
                <div>
                  <a href="delcomment_<?= htmlspecialchars($data->getCommentId()) ?>"> <input type="button" class="btn btn-primary btn-lg" value="Oui"> </a>
                </div>
                <div>
                  <a href="#"> <input type="button" class="btn btn-primary btn-lg" data-dismiss="modal" value="Annuler"> </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <?php
      }
        ?>
      </table>


               </div>
             </div>
           </div>
        </div>
  </section>

<?php $content = ob_get_clean();  ?>

    <?php require('panel_template.php'); ?>
