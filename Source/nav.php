<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PHPLAND</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <?php
        if (isset($_SESSION['userId'])) {
            echo '<li class="nav-item ml-2"><a href="functions/logout.fc.php" name class="btn btn-outline-danger">Se déconnecter</a></li>';
        }
        else {
            echo "<li class='nav-item'>
                    <a href='signup.php' class='btn btn-outline-primary'>S'enregistrer</a>
                  </li>
                  <li class='nav-item ml-2'>
                    <a href='login.php' class='btn btn-outline-primary'>Se connecter</a>
                  </li>";
        }
      ?>
    </ul>
  </div>
</nav>
