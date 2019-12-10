<?php ob_start(); ?>

    <?php require('template/intro.php'); ?>

    <?php require('template/cv.php'); ?>

    <?php require('template/services.php'); ?>

    <?php require('template/blog.php'); ?>

<?php $content = ob_get_clean();  ?>

    <?php require('template.php'); ?>
