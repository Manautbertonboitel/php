<?php
require "headersession.php";
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHPLAND</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <?php
      require "nav.php";
      ?>

      <div class="row">
        <div class="col">
          <?php
          if (isset($_SESSION['userId'])) {
              echo "<p>Vous êtes connecté</p>";
          }
          else {
              echo "<p>Vous êtes déconnecté</p>";
          }
           ?>
        </div>
      </div>

      <div class="row justify-content-center">
        <?php
        include_once 'functions/database.fc.php';

        $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL statement failed!";
        }
        else {
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);

          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card m-2" style="width: 250px">
                    <img class="card-img-top" src="assets/img/'.$row["imgFullNameGallery"].'" alt="" style="width:250px; height: 250px">
                    <div class="card-body">
                      <h5 class="card-title">'.$row['titleGallery'].'</h5>
                      <p class="card-text">'.$row['descGallery'].'</p>
                    </div>
                  </div>';
          }
        }
        ?>
      </div>
      <!-- <div class="card-img-top" style="width:150px; height:150px; background-image: url(asset/img/'.$row["imgFullNameGallery"].')"></div> -->

      <?php
      if (isset($_SESSION['userId'])) {
          echo '<div class="row">
                  <form action="functions/gallery.fc.php" class="col-xl-5" method="post" enctype="multipart/form-data">
                    <input  type="text" class="form-control my-3" placeholder="Image" name="filename">
                    <input  type="text" class="form-control my-3" placeholder="Titre" name="filetitle">
                    <input  type="text" class="form-control my-3" placeholder="Description" name="filedesc">
                    <input  type="file" class="form-control-file" name="file">
                    <button type="submit" name="submit" class="btn btn-primary mt-3">Publier</button>
                  </form>
                </div>';
      }
      ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
