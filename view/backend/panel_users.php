<?php ob_start(); ?>
<div class="main-panel">
<div class="content-wrapper">
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Utilisateurs
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
            <th scope="col">Email</th>
            <th scope="col">Date d'inscription</th>
            <th scope="col">Supprimer</th>
          </tr>
        <?php
           foreach ($users as $data)
           {
           ?>
             <tr>
                <td><?= htmlspecialchars($data->getName()) ?></td>
                <td><?= htmlspecialchars($data->getFirstname()) ?></td>
                <td><?= htmlspecialchars($data->getEmail()) ?></td>
                <td><?= htmlspecialchars($data->getDateRegister()) ?></td>
                <td>
                  <div>
                    <a href="deluser_<?= htmlspecialchars($data->getUserID()) ?>"> <input type="button" value="Delete"> </a>
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
