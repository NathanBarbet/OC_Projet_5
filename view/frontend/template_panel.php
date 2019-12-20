<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('module/header.php'); ?>
</head>

<body id="page-top">

  <?php
    if (isset($_SESSION['Admin']) AND $_SESSION['Admin'] == 1)
    {
      require('module/panel/panel_nav.php');

      echo $content;
    }
    else
    {
      echo 'Vous devez être administrateur !';
    }
  ?>

  <?php require('module/libraries.php'); ?>

</body>
</html>
