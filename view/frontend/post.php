<?php ob_start(); ?>

    <?php require('module/post/post_intro.php'); ?>

    <?php require('module/post/post_single.php'); ?>

    <?php require('module/post/post_comments.php'); ?>

    <?php require('module/post/post_form_comment.php'); ?>

    <?php require('module/post/post_sidebar.php'); ?>

<?php $content = ob_get_clean();  ?>

    <?php require('template.php'); ?>
