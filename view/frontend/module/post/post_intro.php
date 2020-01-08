<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url(public/img/intro-bg.jpg)">
  <div class="intro-content display-table">
    <div class="table-cell">
      <div class="container">
        <?php
        foreach ($post as $data)
        {
        ?>
        <h2 class="intro-title mb-4"><?= $data->getTitle()?></h2>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
<!--/ Intro Skew End /-->
