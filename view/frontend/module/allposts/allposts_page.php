<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row row-eq-height">
          <?php
             foreach ($posts as $data)
             {
             ?>
             <div class="col-md-4">
               <div class="card card-blog">
                 <div class="card-img">
                   <a href="post_<?= htmlspecialchars($data->getPostId()) ?>"><img src="<?= htmlspecialchars($data->getImg()) ?>" alt="" class="img-fluid"></a>
                 </div>
                 <div class="card-body">
                   <div class="card-category-box">
                     <div class="card-category">
                       <h6 class="category"><?=$data->getTitle() ?></h6>
                     </div>
                   </div>
                   <h3 class="card-title"><a href="post_<?= htmlspecialchars($data->getPostId()) ?>"><?= $data->getPost_lead() ?></a></h3>
                 </div>
                 <div class="card-footer">
                   <div class="post-author">
                       <img src="https://user.oc-static.com/users/avatars/15620576259606_Image%20petit.png" alt="" class="avatar rounded-circle">
                       <span class="author">Barbet Nathan</span>
                     </a>
                   </div>
                   <div class="post-date">
                     <span class="ion-ios-clock-outline"></span>le <?= nl2br(htmlspecialchars($data->getDate())) ?>
                   </div>
                 </div>
               </div>
             </div>
             <?php
             }
             ?>
          </div>
        </div>
      </div>
    </div>
</section>
