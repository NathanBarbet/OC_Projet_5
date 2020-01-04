<?php ob_start(); ?>
<div class="main-panel">
<div class="content-wrapper">
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Posts
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      </br></br>
      <div>
        <a href="addpost"> <input type="button" value="Ajouter un post"> </a>
      </div>
    </br></br>
      <div class="row">
        <table class="table table-responsive-sm col-md-12">
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Date de publication</th>
            <th scope="col">Statut</th>
            <th scope="col">Changer statut</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        <?php
           foreach ($posts as $data)
           {
           ?>
             <tr>
                <td> <a href="post_<?= htmlspecialchars($data->getPostId()) ?>"> <?= htmlspecialchars($data->getTitle()) ?></td>
                <td><?= htmlspecialchars($data->getDate()) ?></td>
                <td><?= htmlspecialchars($data->getPostStatut()) ?></td>
                <td><?php
                      if ($data->getPostStatutID() == 1)
                      {
                        ?>
                    <div>
                      <a href="pausepost_<?= htmlspecialchars($data->getPostId()) ?>"> <input type="button" value="Mettre en attente"> </a>
                    </div>
                    <?php } ?>
                    <?php
                      if ($data->getPostStatutID() == 2)
                      {
                        ?>
                        <div>
                          <a href="publishpost_<?= htmlspecialchars($data->getPostId()) ?>"> <input type="button" value="Publier"> </a>
                        </div>
                      <?php } ?>
                </td>
                <td>
                  <div>
                    <a href="editpost_<?= htmlspecialchars($data->getPostId()) ?>"> <input type="button" value="Modifier"> </a>
                  </div>
                </td>
                <td>
                  <div>
                    <a href="delpost_<?= htmlspecialchars($data->getPostId()) ?>"> <input type="button" value="Delete"> </a>
                  </div>
                </td>
             </tr>
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
