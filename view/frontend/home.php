<?php ob_start(); ?>

    <?php require('module/intro.php'); ?>

    <?php require('module/cv.php'); ?>

    <?php require('module/services.php'); ?>

    <?php require('module/blog.php'); ?>

<?php $content = ob_get_clean();  ?>

    <?php require('template.php'); ?>
