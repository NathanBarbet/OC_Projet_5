<?php ob_start(); ?>

    <?php require 'module/login/login_intro.php'; ?>

    <?php require 'module/login/login_confirm.php'; ?>

<?php $content = ob_get_clean();  ?>

    <?php require 'template.php'; ?>
