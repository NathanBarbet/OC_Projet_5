<!DOCTYPE html>
<html lang="fr">
  <head>
    <script src="https://cdn.tiny.cloud/1/6yj2fi6nx4ebdesr1xbpo1plo79myuh4tg6wz4wyb5mjyvrx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#post_lead',
        plugins: "emoticons",
        toolbar: "emoticons"
      });
    </script>
    <script>
      tinymce.init({
        selector: '#post',
        plugins: "emoticons",
        toolbar: "emoticons"
      });
    </script>
    <?php require('module/header.php'); ?>
  </head>
  <body>
    <?php
      if (isset($_SESSION['Admin']) AND $_SESSION['Admin'] == 1)
      {
        require('module/nav.php');

        require('module/sidebar.php');

        echo $content;

        require('module/footer.php');
      }
      else
      {
        echo 'Vous devez être administrateur !';
      }
    ?>
  </body>
</html>
