<?php ob_start(); ?>

    <?php require('module/register/register_intro.php'); ?>

    <?php require('module/register/register_error.php'); ?>

<?php $content = ob_get_clean();  ?>

    <?php require('template.php'); ?>
