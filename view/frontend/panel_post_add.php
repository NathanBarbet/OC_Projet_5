<?php ob_start(); ?>

    <?php require('module/panel/panel_intro.php'); ?>

    <?php require('module/panel/panel_post_form.php'); ?>


<?php $content = ob_get_clean();  ?>

    <?php require('template_panel.php'); ?>
