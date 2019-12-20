<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll" href="home">NB</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll active" href="home#home">Retour</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="listposts">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="listcomments">Comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="users">Users</a>
        </li>
        <?php
          if (isset($_SESSION['Name']) AND isset($_SESSION['Firstname']) AND isset($_SESSION['Email']))
          {
        ?>

        <li class="nav-item">
          <?php  echo 'Bonjour ' . $_SESSION['Firstname']; ?>
        </li>
        <li class="nav-item">
          <?php  echo '<a href="logout"> Logout</a>'; ?>
        </li>

        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
