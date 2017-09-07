<?php  

if(!empty($_POST)){
    
                                            // LAST NAME
    
    // Vérification que le champ LastName existe et n'est pas vide
    if(isset($_POST['LastName']) AND !empty($_POST['LastName'])){
        
        // Vérification que le champ LastName soit conforme à la regex
        if(!preg_match('#^[a-z \-áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{3,50}$#i', $_POST['LastName'])){
            
            // Si le champ n'est pas conforme, on créee une erreur dans l'array $errors
            $errors[] = "Nom invalide";
        }
    } else {
        // Si le champ nom n'existe pas ou est vide, on crée une erreur dans l'array $errors
        $errors[] = "Veuillez remplir le champ Nom!";
    }
    
                                            // FIRST NAME
    
    // Vérification que le champ FirstName existe et n'est pas vide
    if(isset($_POST['FirstName']) AND !empty($_POST['FirstName'])){
        
        // Vérification que le champ FirstName soit conforme à la regex
        if(!preg_match('#^[a-z \-áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{3,50}$#i', $_POST['FirstName'])){
            // Si le champ n'est pas conforme, on crée une erreur dans l'array $errors
            $errors[] = "Prenom invalide";
        }
    } else {
        // Si le champ n'existe pas ou est vide, on créee une erreur dans l'array $errors
        $errors[] = "Veuillez remplir le champ prenom!";
    }

                                            // USER NAME
    
    // Vérification que le champ UserName existe et n'est pas vide
    if(isset($_POST['FirstName']) AND !empty($_POST['FirstName'])){
        
        // Vérification que le champ UserName soit conforme à la regex
        if(!preg_match('#^[a-z \-áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{3,50}$#i', $_POST['UserName'])){
            // Si le champ n'est pas conforme, on crée une erreur dans l'array $errors
            $errors[] = "Pseudo invalide";
        }
    } else {
        // Si le champ n'existe pas ou est vide, on créee une erreur dans l'array $errors
        $errors[] = "Veuillez remplir le champ pseudo!";
    }

                                          // Date of Birth
    
    // Vérification que le champ Date of Birth existe et n'est pas vide
    if(isset($_POST['DateofBirth']) AND !empty($_POST['DateofBirth'])){
        
        // Vérification que le champ Date of Birth soit conforme à la regex
        if(!preg_match('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', $_POST['DateofBirth'])){
            // Si le champ n'est pas conforme, on créee une erreur dans l'array $errors
            $errors[] = " Annee de naissance invalide";
        }
    } else {
        // Si le champ n'existe pas ou est vide, on créee une erreur dans l'array $errors
        $errors[] = "Veuillez remplir le Date of Birth!";
    }

                                          // Telephone Number
    
    // Vérification que le champ Telephone Number existe et n'est pas vide
    if(isset($_POST['TelephoneNumber']) AND !empty($_POST['TelephoneNumber'])){
        
        // Vérification que le champ Date of Birth soit conforme à la regex
        if(!preg_match('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', $_POST['TelephoneNumber'])){
            // Si le champ n'est pas conforme, on créee une erreur dans l'array $errors
            $errors[] = " Numero invalide";
        }
    } else {
        // Si le champ n'existe pas ou est vide, on créee une erreur dans l'array $errors
        $errors[] = "Veuillez remplir le numero!";
    }

                                                // Email
    
    // Vérification que le champ Email existe et n'est pas vide
    if (isset($_POST['email']) && !empty($_POST['email'])){

      //verification de la synthaxe de l'email
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
          $errors['invalidEmail']= true;
        }

      }else {
        $errors['emptyEmail']=true;
      }
    
                                              // Password
 
    // Vérification que le champ password existe et n'est pas vide
    if(isset($_POST['password']) AND !empty($_POST['password'])){
          
          // Vérification que le champ password soit conforme à la regex
          if(!preg_match('#^[a-z\-áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{3,50}$#i', $_POST['password'])){
          $errors['emptyPassword']=true;
        }

      }else {
        $errors['invalidPassword']=true;
      }

                                              // Theme Favori
  

    // Vérification que le champ password existe et n'est pas vide
      if (isset($_POST['Favs'])  && !empty($_POST['Favs']))
      {       
        $strFavs=$_POST['Favs'];
        $tFavs=array('Philosophie', 'Histoire', 'People', 'Geographie', 'Politique', 'Economie');
        if(!in_array($strFavs, $tFavs)) {
          $tErreurs[]="Merci de choisir une catégorie";
        }
      }
      else
      {
        $tErreurs[]="Veuillez choisir une catégorie";
      }
    
    // Si l'array $errors n'existe pas, alors c'est que tous les champs sont valides, donc on créer une variable de succès
    if(!isset($errors)){ 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>formulaire</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">  
</head>
  
    <body>

     <p>INSCRIPTION</p> 

        <div class="container">
          <form action="inscription.php" method="POST" class="col-xs-6-offset-3 ">
            
            <div class="form-group row">
              <label for="inputLastName" class="col-sm-2 col-form-label">LastName</label>        
                <input type="text" name="LastName" class="form-control" id="LastName" placeholder="LastName">
            </div>

            <div class="form-group row">
              <label for="inputFirstName" class="col-sm-2 col-form-label">FirstName</label>        
                <input type="text" name="FirstName" class="form-control" id="FirstName" placeholder="FirstName">
            </div>

            <div class="form-group row">
              <label for="inputUserName" class="col-sm-2 col-form-label">UserName</label>        
                <input type="text" name="UserName" class="form-control" id="UserName" placeholder="UserName">
            </div>
            
            <div class="form-group row">
              <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>           
                <input type="DateofBirth" name="Dateofbirth" class="form-control" id="Dateofbirth" placeholder="Dateofbirth">
            </div>

            <div class="form-group row">
              <label for="dob" class="col-sm-2 col-form-label">Telephone Number</label>           
                <input type=" inputtelephone" name="TelephoneNumber" class="form-control" id="TelephoneNumber" placeholder="TelephoneNumber"
            ></div>

            <div class="form-group row">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>        
                <input type="text" name="email" class="form-control" id="email" placeholder="email">
            </div> 
            
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>           
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>

            <div class="form-group row">
              
              <form> 
                  <label for="inputFavs" class="col-sm-2 col-form-label">Votre thème favori</label>           
                    <select  name="Favs" class="form-control" id="Favs" 
                   placeholder="Favs">
                        <option>Choisissez un thème</option>
                        <option>Philosophie</option>
                        <option>Histoire</option>
                        <option>People</option>
                        <option>Geographie</option>
                        <option>Politique</option>
                        <option>Economie</option>
                    </select>
              </form>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-info">Inscription</button>            
            </div>
          </form>
        </div>
   
    </body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="script.js"></script> 
</html>