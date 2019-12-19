<section id="blog" class="blog-mf sect-pt4 route">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="title-box text-center">
          <h3 class="title-a">
            Blog
          </h3>
          <p class="subtitle-a">

          </p>
          <div class="line-mf"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
         while ($data = $posts->fetch())
         {
         ?>
         <div class="col-md-4">
           <div class="card card-blog">
             <div class="card-img">
               <a href="post_<?= htmlspecialchars($data['ID']) ?>"><img src="<?= htmlspecialchars($data['Img']) ?>" alt="" class="img-fluid"></a>
             </div>
             <div class="card-body">
               <div class="card-category-box">
                 <div class="card-category">
                   <h6 class="category"><?= htmlspecialchars($data['Title']) ?></h6>
                 </div>
               </div>
               <h3 class="card-title"><a href="view/frontend/post.php"><?= nl2br(htmlspecialchars($data['Post_lead'])) ?></a></h3>
               <p class="card-description">
                 <?= nl2br(htmlspecialchars($data['Content'])) ?>
               </p>
             </div>
             <div class="card-footer">
               <div class="post-author">
                 <a href="#">
                   <img src="https://user.oc-static.com/users/avatars/15620576259606_Image%20petit.png" alt="" class="avatar rounded-circle">
                   <span class="author">Barbet Nathan</span>
                 </a>
               </div>
               <div class="post-date">
                 <span class="ion-ios-clock-outline"></span>le <?= $data['Date_publish_fr'] ?>
               </div>
             </div>
           </div>
         </div>
         <?php
         }
         $posts->closeCursor();
         ?>
      </div>
    </div>
</section>
