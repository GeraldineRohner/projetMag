<?php 
// Inclusion du fichier de connexion à la BDD avec un require car c'est un morceau de code indispensable et on doit arrêter la page de charger si il n'est pas trouvé
require('bdd.inc.php');



if(!empty($_POST)){

  $realEmail = 'jean@exemple.com';
  $realPassword = 'azerty';

  // Bloc de vérifications

  if(isset($_POST['email']) && !empty($_POST['email'])){
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $errors['invalideEmail'] = true;
    }

  } else {

    $errors['emptyEmail'] = true;

  }

  if(isset($_POST['password']) && !empty($_POST['password'])){
    if(!preg_match('#^.{3,25}$#', $_POST['password'])){
      $errors[] = $errors['invalidePassword'] = true;
    }

  }else{

    $errors['emptyPassword'] = true;

  }

  if($_POST['email']!=$realEmail){
    $errors['badEmail'] = true;
  }

  if($_POST['password']!=$realPassword){
    $errors['badPassword'] = true;
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Document</title>
 <link rel="stylesheet" href="style/style.css">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      </head>

      <style>

        body {
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #eee;
        }

        .form-signin {
          max-width: 330px;
          padding: 15px;
          margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
          margin-bottom: 10px;
        }
        .form-signin .checkbox {
          font-weight: normal;
        }
        .form-signin .form-control {
          position: relative;
          height: auto;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }


      </style>

      <body>

        <div class="container">

          <form class="form-signin">

            <h2 class="form-signin-heading">Please sign in</h2>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>

        </div>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>
      </body>
      </html>