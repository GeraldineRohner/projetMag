<<<<<<< HEAD:connection_inscription/connection.php
<?php
session_start();
=======
<?php 
// Inclusion du fichier de connexion à la BDD avec un require car c'est un morceau de code indispensable et on doit arrêter la page de charger si il n'est pas trouvé
require('../include/bdd.inc.php');


>>>>>>> origin/master:log/connection.php

// Verifications
if(!empty($_POST)){

    // Vérification de l'existance et du remplissage du champ email

  if(isset($_POST['email']) AND !empty($_POST['email'])){

        // Vérification de la conformité de l'email avec FILTER_VALIDATE

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            // Si non conforme => message d'erreur

      $errors[] = "Email invalide";

    }

  } else {

        // Si le champ n'existe pas ou est vide => message d'erreur

    $errors[] = "Veuillez remplir votre email !";

  }

    // Vérification de l'existance et du remplissage du champ mot de passe

  if(isset($_POST['password']) AND !empty($_POST['password'])){

        // Vérification de la conformité du mot de passe

    if(!preg_match('#^(\w[\_\!\( áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]?){3,50}$#', $_POST['password'])){

            // Si non => message d'erreur

      $errors[] = "Mot de passe invalide";

    }

  } else {

        // Si le champ n'existe pas ou est vide, on créer une erreur dans l'array $errors

    $errors[] = "Veuillez remplir le mot de passe !";

  }



    // Si aucune erreur détectée 

  if(!isset($errors)){

// Inclusion du fichier de connexion à la BDD avec un require
    require('../include/bdd.inc.php');


        // Récupération de l'empreinte du mot de passe en BDD

    $accounts = $bdd->prepare("SELECT * FROM users_info WHERE email= ?");

    $accounts->execute(array($_POST['email'])); 


    $accountsInfo = $accounts->fetch(PDO::FETCH_ASSOC);


    



    // vérification que le compte existe bien en BDD

    if(!empty($accountsInfo)){



      // Vérification de la conformité du mot de passe

      if (password_verify($_POST['password'], $accountsInfo['Password'])){

        $success= "Vous êtes connecté, pour accéder à la liste d'articles cliquez <a href='../articles/listearticle.php'>ici</a>";

        $_SESSION['Email']=$accountsInfo['Email'];
        $_SESSION['UserName']=$accountsInfo['UserName'];
        $_SESSION['FirstName']=$accountsInfo['FirstName'];
        

      } else {

        $errors[] = "Le mot de passe est incorrect !";

      }

    // si le compte n'existe pas => message d'erreur

    } else { 

      $errors[] = "Compte inexistant";

    } 
    $accounts->closeCursor();
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
          <nav class="navbar navbar-default">
            <div class="container-fluid">

              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="inscription.php">Inscription</a></li>
                  <li><a href="connection.php">Connexion</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="admin.php">Admin</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

        <div class="container">

         <?php

          // Si l'array $errors existe, on extrait toutes les erreurs qu'il contient avec un foreach et on les affiches
         if(isset($errors)){
          foreach($errors as $error){
            echo '<p style="color:red;">'.$error.'</p>';
          }
        }
          // Si $success existe, on l'affiche
        if(isset($success)){
          echo '<div style="font-size:50px;" class="alert alert-success" role="alert">'.$success.'</div>';
        }else{


          ?>

          <form class="form-signin" method="POST" action="connection.php">

            <h2 class="form-signin-heading">Please sign in</h2>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address">

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">

            <input type="hidden" name="token" id="token" value="<?php//Le champ caché a pour valeur le jetonecho $token;?>"/>

            <button class="btn btn-lg btn-primary btn-block" name="validation" type="submit">Sign in</button>

          </form>

          <?php
        }
        ?>



      </div>


      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="scripts/script.js"></script>
    </body>
    </html>