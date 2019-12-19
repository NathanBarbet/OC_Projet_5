<div class="form-comments">
  <div class="title-box-2">
    <h3 class="title-left">
    </h3>
  </div>
  <?php
    if (!isset($_SESSION['Name']) AND !isset($_SESSION['Firstname']) AND !isset($_SESSION['Email']))
    {
  ?>
  <form class="form-mf" action="login_confirm" method="post">
    <div class="row">
      <div class="col-md-6 mb-3">
        <div>
          <label> Email : </label><input type='email' name='Email' required/>* <br />
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div>
          <label> Password : </label><input type='password' name='Password' required/>* <br /> <br />
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div>
          <input type='submit' name='login' value='login' /> <br /> <br />
        </div>
      </div>
    </div>
  </form>
<?php }
else
{
  echo 'Vous êtes déjà connecté !';
}
?>
</div>
</div>
