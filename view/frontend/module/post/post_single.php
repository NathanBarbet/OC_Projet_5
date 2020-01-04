<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        foreach ($post as $data)
        {
        ?>
        <div class="post-box">
          <div class="post-thumb">
            <img src="<?= $data->getImg()?>" class="img-fluid col-md-12" alt="">
          </div>
          <div class="post-meta">
            <h1 class="article-title"><?= $data->getTitle()?></h1>
            <ul>
              <li>
                <h6>
                <span class="ion-ios-person"></span>
                Barbet Nathan</h6>
              </li>
              <li>
                <h6>
                <span class="ion-pricetag"></span>
                le <?= $data->getDate()?></h6>
              </li>
              <li>
                <?php
                  if ($data->getDateModify() != null)
                  {
                ?>
                <h6>(Modifier le :<?= $data->getDateModify()?>)</h6>
              <?php } ?>
              </li>
            </ul>
          </div>
          <div class="article-content">
            <blockquote class="blockquote">
              <p class="mb-0 col-md-12"><?= $data->getPost_lead()?></p>
            </blockquote>
            <p class="col-md-12">
              <?= $data->getContent()?>
            </p>
          </div>
        </div>
      <?php } ?>
