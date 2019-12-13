<?php ob_start(); ?>

    <?php require('module/post/post_intro.php'); ?>

    <?php require('module/register/register_form.php'); ?>

<?php $content = ob_get_clean();  ?>

    <?php require('template.php'); ?>
