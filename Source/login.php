<!DOCTYPE html>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Se connecter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <?php
      require "nav.php";
      ?>

      <div class="row">
        <form action="php/signin.php" class="col-md-7">
          <div class="form-group row align-items-center my-4">
            <label class="col" for="exampleInputEmail1">Adresse Email</label>
            <input class="col form-control" id="exampleInputEmail1" placeholder="Entrer votre addresse email" name="uname" required>
          </div>
          <div class="form-group row align-items-center">
            <label class="col" for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="col form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe" name="psw" required>
          </div>
          <button type="submit" name="submit" value="OK" class="btn btn-primary">Se connecter</button>
        </form>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
