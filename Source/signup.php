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
        <form action="functions/signup.fc.php" class="col-xl-5" method="post">
          <input  type="text" class="form-control my-3" placeholder="Nom d'utilisateur" name="uname">
          <input  type="password" class="form-control my-3" placeholder="Mot de passe" name="pwd">
          <input  type="password" class="form-control my-3" placeholder="Répéter le mot de passe" name="pwd-repeat">
          <button type="submit" name="signup-submit" class="btn btn-primary">S'enregistrer</button>
        </form>
      </div>
    </div>
    <?php
    require "scripts.php";
    ?>
  </body>
</html>
