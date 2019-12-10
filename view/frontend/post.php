<?php ob_start(); ?>

    <?php require('template/post/post_intro.php'); ?>

    <?php require('template/post/post_single.php'); ?>

    <?php require('template/post/post_comments.php'); ?>

    <?php require('template/post/post_form_comment.php'); ?>

    <?php require('template/post/post_sidebar.php'); ?>

<?php $content = ob_get_clean();  ?>

    <?php require('template.php'); ?>
