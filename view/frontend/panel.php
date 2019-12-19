<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('module/header.php'); ?>
</head>

<body id="page-top">

  <?php
    if (isset($_SESSION['Name']) AND isset($_SESSION['Firstname']) AND isset($_SESSION['Email']) AND isset($_SESSION['Admin']) AND $_SESSION['Admin'] == 1)
    {
      require('module/nav.php');

      require('module/panel/panel_intro.php');
    }
    else
    {
      echo 'Vous devez être administrateur !';
    }
  ?>

  <?php require('module/libraries.php'); ?>

</body>
</html>
