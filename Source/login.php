<?php
require "headersession.php";
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
  require "head.php";
  ?>
  <body>
    <div class="container">
      <?php
      require "nav.php";
      ?>
      <div class="row">
        <form action="functions/login.fc.php" class="col-xl-5" method="post">
          <input  type="text" class="form-control my-3" placeholder="Nom d'utilisateur" name="uname">
          <input  type="password" class="form-control my-3" placeholder="Mot de passe" name="pwd">
          <div class="row">
            <div class="col">
              <button type="submit" name="login-submit" class="btn btn-primary">Se connecter</button>
            </div>
            <div class="col">
              <a href="signup.php" class="btn btn-link">S'enregistrer</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php
    require "scripts.php";
    ?>
  </body>
</html>
