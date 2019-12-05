<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="post-box">
          <div class="post-thumb">
            <img src="public/img/post-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="post-meta">
            <h1 class="article-title"><?= htmlspecialchars($post['Title']) ?></h1>
            <ul>
              <li>
                <span class="ion-ios-person"></span>
                <a href="#">Barbet Nathan</a>
              </li>
              <li>
                <span class="ion-pricetag"></span>
                <a href="#">le <?= $post['Date_publish_fr'] ?></a>
              </li>
            </ul>
          </div>
          <div class="article-content">
            <blockquote class="blockquote">
              <p class="mb-0"><?= $post['Lead'] ?></p>
            </blockquote>
            <p>
              <?= nl2br(htmlspecialchars($post['Content'])) ?>
            </p>
          </div>
        </div>
