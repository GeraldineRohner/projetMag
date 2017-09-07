<?php 

	require("../include/bdd.inc.php");
	require("../include/session.php");

	$getOneProfil = $bdd->prepare("SELECT LastName, FirstName, UserName, DoB, Email, TelephoneNb, Favs  FROM users_info WHERE id=:id ");
	$getOneProfil->bindValue(":id", htmlspecialchars($_GET['id']), PDO::PARAM_STR);
	$getOneProfil->execute();

	$userInfo = $getOneProfil->fetch(PDO::FETCH_ASSOC);

	$getOneProfil->closeCursor();


	echo "<pre>";
	print_r ($userInfo);
	echo "</pre>";


	if(!empty($_POST)){
	
	 // Vérification que le champ NOM existe et n'est pas vide
	    if(isset($_POST['LastName']) AND !empty($_POST['LastName'])){

	        // Vérification de la conformité du champ
	        if(!preg_match('#^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\- ]){2,50}$#', $_POST['LastName'])){
	            
	            // Si non conforme, création d'une erreur
	            $errors[] = "Votre nom est invalide !";

	        }

	    } else {

	        // Si le champ n'existe pas ou est vide, création d'une erreur
	        $errors[] = "Veuillez renseigner votre nom !";

	    }


	    // Vérification que le champ PRENOM existe et n'est pas vide
	    if(isset($_POST['FirstName']) AND !empty($_POST['FirstName'])){

	        // Vérification de la conformité du champ
	        if(!preg_match('#^([a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\- ]){2,50}$#', $_POST['FirstName'])){
	            
	            // Si non conforme, création d'une erreur
	            $errors[] = "Votre prénom est invalide !";

	        }

	    } else {

	        // Si le champ n'existe pas ou est vide, création d'une erreur
	        $errors[] = "Veuillez renseigner votre prénom !";

	    }
	    

	 
	    // Vérification que le champ PSEUDO existe et n'est pas vide
	    if(isset($_POST['UserName']) AND !empty($_POST['UserName'])){

	        // Vérification de la conformité du champ
	        if(!preg_match('#^([a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\-]){3,50}$#', $_POST['UserName'])){
	          
	            // Si non conforme, création d'une erreur
	            $errors[] = "Votre pseudo est invalide !";

	        }

	    } else {

	        // Si le champ n'existe pas ou est vide, création d'une erreur
	        $errors[] = "Veuillez renseigner votre pseudo!";

	    }



	    // Vérification que le champ DATE DE NAISSANCE existe et n'est pas vide
	    if(isset($_POST['DoB']) AND !empty($_POST['DoB'])){

	        // Vérification de la conformité du champ
	        if(!preg_match('#^\d{4}\-\d{2}\-\d{2}$#', $_POST['DoB'])){
	            // Si non conforme, création d'une erreur
	            $errors[] = "Votre date de naissance est invalide !";

	        }

	    } else {

	        // Si le champ n'existe pas ou est vide, création d'une erreur
	        $errors[] = "Veuillez renseigner votre date de naissance !";

	    }




		// Vérification que le champ EMAIL existe et n'est pas vide
	    if(isset($_POST['Email']) AND !empty($_POST['Email'])){

	        // Vérification de la conformité du champ
	        if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
	           
	            // Si non conforme, création d'une erreur
	            $errors[] = "Votre email est invalide";

	        }

	    } else {

	        // Si le champ n'existe pas ou est vide, création d'une erreur
	        $errors[] = "Veuillez renseigner votre email !";
	        
	    }



	    // Vérification que le champ TELEPHONE existe et n'est pas vide
	    if(isset($_POST['TelephoneNb']) AND !empty($_POST['TelephoneNb'])){


	        // Vérification de la conformité du champ avec un filter_validate URL
	        if(!preg_match('#^(\d{2}[\s\-\.]){4}\d{2}|\d{10}$#', $_POST['TelephoneNb'])){
	            
	            // Si non conforme, création d'une erreur
	            $errors[] = "Votre numéro de téléphone est invalide !";
	        } 

	        	
	    } else {

	        // Si le champ n'existe pas ou est vide, création d'une erreur
	        $errors[] = "Veuillez renseigner votre numéro de téléphone !";

	    }
	
	
		// Vérification que le champ TELEPHONE existe et n'est pas vide
	    if(isset($_POST['Favs']) AND !empty($_POST['Favs'])){


	        $theme=$_POST['Favs'];
			$tTheme=array('Economie', 'Philosophie', 'Histoire', 'People', 'Géographie', 'Politique');
			
			if(!in_array($theme, $tTheme)) {
			
				$tErreurs[]="Merci de choisir un thème";
				
			}
	        
	    }


	    // Si $errors n'existe pas :
	    if(!isset($errors)){
	       
			$success = "Vos modifications ont bien été enregistrées !";
			
		} else{
			// si non, message d'erreur
			
			$errors[] = "L'enregistrement a échoué, veuillez réessayer";
		}
	} 





?>


<!DOCTYPE html>
<html lang="fr">

	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<title> Edit Profil - Webzine </title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="style.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<!-- CSS DATATABLE -->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

	</head>
	
	<body>
	
	<?php include('../include/navBo.php'); ?>
	
	<div class="container">

		<header class="row">
			<div class="col-sm-6">

			<h1>Modifier mon profil</h1>

			<br><br>
			</div>

		</header>


		<main class="row">


			<!-- =============================================== FORMULAIRE =============================================== -->
			<div id="formulaire" class="col-sm-6">

				<!-- EDITION DU FORMULAIRE -->

				<!-- CODE D'EDITION  (ouvert au début du formulaire, fin à la fin du formulaire) -->

				<form class="form-horizontal" action="editProfil.php?id=".htmlspecialchars($userInfo["id"])."" method="post">

					<fieldset>

						<!-- ================= NOM ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Nom </label>  
							<div class="col-md-5">
								<input id="LastName" name="LastName" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo['LastName']);?>">
							</div>
						</div>

						<!-- ================= PRENOM ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Prénom </label>  
							<div class="col-md-5">
								<input id="FirstName" name="FirstName" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo['FirstName']);?>">
							</div>
						</div>
						
						<!-- ================= PSEUDO ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Pseudo </label>  
							<div class="col-md-5">
								<input id="UserName" name="UserName" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo['UserName']);?>">
							</div>
						</div>

						<!-- ================= DATE DE NAISSANCE ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Date de naissance </label>  
							<div class="col-md-5">
								<input id="DoB" name="DoB" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo['DoB']);?>">
							</div>
						</div>

						<!-- ================= Email ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Adresse email </label>  
							<div class="col-md-5">
								<input id="Email" name="Email" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo['Email']);?>">
							</div>
						</div>

						<!-- ================= Téléphone ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Numéro de téléphone </label>  
							<div class="col-md-5">
								<input id="TelephoneNb" name="TelephoneNb" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo['TelephoneNb']);?>">
							</div>
						</div>
						
						<!-- ================= THEMES ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Thème de prédilecion </label>  
							<div class="col-md-5">
								<select name="Favs" id="Favs" class="form-control">
									<option value=""></option>
									<option value="0">Economie</option>
									<option value="1">Philosophie</option>
									<option value="2">Histoire</option>
									<option value="3">People</option>
									<option value="4">Géographie</option>
									<option value="5">Politique</option>
								</select>

							</div>
						</div>						
			
					</fieldset>
					
					<button type="submit" class="btn btn-success"> Valider </button>
					
				</form>
				
			</div>	
		</main>
	</div>


		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="scripts/script.js"></script>


		<!-- Script jQuery "champs requis" pour le formulaire -->
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

		<!-- Scripts jQuery pour modifier la langue du message en anglais par défaut -->
		<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_fr.js"></script>

		<!-- Script pour validation du formulaire -->
		<script>
		$("#myform").validate();
		</script>

	
	</body>
</html>