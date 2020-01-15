<?php ob_start(); ?>

    <?php require 'module/allposts/allposts_intro.php'; ?>

    <?php require 'module/allposts/allposts_page.php'; ?>

<?php $content = ob_get_clean();  ?>

    <?php require 'template.php'; ?>
