<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.tiny.cloud/1/6yj2fi6nx4ebdesr1xbpo1plo79myuh4tg6wz4wyb5mjyvrx/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#comment',
      plugins: "emoticons",
      toolbar: "emoticons"
    });
  </script>
  <?php require('module/header.php'); ?>
</head>

<body id="page-top">

  <?php require('module/nav.php'); ?>

  <?php echo $content; ?>

  <?php require('module/contact.php'); ?>

  <?php require('module/libraries.php'); ?>

</body>
</html>
