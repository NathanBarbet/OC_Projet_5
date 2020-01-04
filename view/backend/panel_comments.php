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
                <td><?= htmlspecialchars($data->getPostTitle()) ?></td>
                <td><?= htmlspecialchars($data->getDate()) ?></td>
                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#commentaire">
                      Voir le commentaire
                    </button></td>
                <td><?php
                      if ($data->getCommentStatutID() == 1)
                      {
                        ?>
                    <div>
                      <a href="pausecomment_<?= htmlspecialchars($data->getCommentId()) ?>"> <input type="button" value="Mettre en attente"> </a>
                    </div>
                    <?php } ?>
                    <?php
                      if ($data->getCommentStatutID() == 2)
                      {
                        ?>
                        <div>
                          <a href="publishcomment_<?= htmlspecialchars($data->getCommentId()) ?>"> <input type="button" value="Publier"> </a>
                        </div>
                      <?php } ?>
                </td>
                <td>
                  <div>
                    <a href="delcomment_<?= htmlspecialchars($data->getCommentId()) ?>"> <input type="button" value="Delete"> </a>
                  </div>
                </td>
             </tr>
             <div class="modal fade" id="commentaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Commentaire</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?= $data->getContent() ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
