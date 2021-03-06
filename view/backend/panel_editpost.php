<?php ob_start(); ?>
<div class="main-panel">
<div class="content-wrapper">
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Modifier un post
              <?php
                 $data = $post;
                 ?>
            </h3>
            <form class="form-mf" action="editpostconfirm_<?= $data->getPostId() ?>" method="post">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div>
                    <label> </label><input type='text' name='Title' value='<?php echo $data->getTitle() ?>' required/>* <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label> </label><input type='text' name='Author' value='<?php echo $data->getAuthor() ?>' required/>* <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label> </label><input type='text' name='Img' value='<?php echo $data->getImg() ?>' required/>* <br /> <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label>Résumé</label><textarea id=post_lead type='textarea' cols="100" rows="10" name='Post_lead' required/><?php echo $data->getPost_lead() ?></textarea> <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label>Post</label><textarea id=post type='textarea' cols="100" rows="20" name='Content' required/><?php echo $data->getContent() ?></textarea> <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <input type='submit' class="btn btn-primary btn-lg" name='valider' value='Valider' /> <br /> <br />
                  </div>
                </div>
              </div>
            </form>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      </br></br>


               </div>
             </div>
           </div>
  </section>

<?php $content = ob_get_clean();  ?>

    <?php require('panel_template.php'); ?>
