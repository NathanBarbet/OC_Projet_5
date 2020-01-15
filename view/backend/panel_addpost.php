<?php ob_start(); ?>
<div class="main-panel">
<div class="content-wrapper">
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Ajouter un post
            </h3>
            <form class="form-mf" action="addpost_confirm" method="post">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div>
                    <label> </label><input type='text' name='Title' placeholder="Titre" required/>* <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label> </label><input type='text' name='Author' placeholder="Auteur" required/>* <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label> </label><input type='text' name='Img' placeholder="Lien image" required/>* <br /> <br />
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label>Résumé</label><textarea id=post_lead type='textarea' cols="100" rows="10" name='Post_lead' placeholder="Résumé"></textarea> <br />
                    <script>
                          CKEDITOR.replace( 'post_lead' );
                    </script>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div>
                    <label>Post</label><textarea id=post type='textarea' cols="100" rows="20" name='Content' placeholder="Post"></textarea> <br />
                    <script>
                          CKEDITOR.replace( 'post' );
                    </script>
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
