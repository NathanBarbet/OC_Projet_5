<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll" href="#page-top">NB</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll active" href="home#home">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="home#about">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="home#service">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="home#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll" href="home#contact">Contact</a>
        </li>
        <?php
          if (isset($_SESSION['Name']) AND isset($_SESSION['Firstname']) AND isset($_SESSION['Email']))
          {
        ?>

        <li class="nav-item">
          <?php  echo 'Bonjour ' . $_SESSION['Firstname']; ?>
        </li>

        <?php } ?>
        <?php
          if (isset($_SESSION['Name']) AND isset($_SESSION['Firstname']) AND isset($_SESSION['Email']) AND isset($_SESSION['Admin']) AND $_SESSION['Admin'] == 1)
          {
        ?>

        <li class="nav-item">
          <?php  echo '<a href="panel"> Panel Admin</a>'; ?>
        </li>

        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
