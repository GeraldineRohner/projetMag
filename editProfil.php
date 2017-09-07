<?php 

	require("bdd.inc.php"); 

	$getOneProfil = $bdd->prepare("SELECT LastName, FirstName, UserName, DoB, Email, TelephoneNb, Favs  FROM users_info WHERE id=:id ");
	$getOneProfil->bindValue(":id", htmlspecialchars($_GET['id']), PDO::PARAM_STR);
	$getOneProfil->execute();

	$userInfo = $getOneProfil->fetch(PDO::FETCH_ASSOC);

	$getOneProfil->closeCursor();


	echo "<pre>";
	print_r ($userInfo);
	echo "</pre>";

?>


<!DOCTYPE html>
<html lang="fr">

	<head>
	
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="style.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<!-- CSS DATATABLE -->
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

	</head>
	
	<body>

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

				<form class="form-horizontal" action="profil.php" method="post">

					<fieldset>

						<!-- ================= NOM ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Nom </label>  
							<div class="col-md-5">
								<input id="LastName" name="LastName" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo)->LastName; ?>">
							</div>
						</div>

						<!-- ================= PRENOM ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Prénom </label>  
							<div class="col-md-5">
								<input id="FirstName" name="FirstName" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo)->FirstName; ?>">
							</div>
						</div>
						
						<!-- ================= PSEUDO ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Pseudo </label>  
							<div class="col-md-5">
								<input id="UserName" name="UserName" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo)->UserName; ?>">
							</div>
						</div>

						<!-- ================= DATE DE NAISSANCE ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Date de naissance </label>  
							<div class="col-md-5">
								<input id="DoB" name="DoB" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo)->DoB; ?>">
							</div>
						</div>

						<!-- ================= Email ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Adresse email </label>  
							<div class="col-md-5">
								<input id="Email" name="Email" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo)->Email; ?>">
							</div>
						</div>

						<!-- ================= Téléphone ================= -->
						<div class="form-group">
							<label class="col-md-4 control-label"> Numéro de téléphone </label>  
							<div class="col-md-5">
								<input id="TelephoneNb" name="TelephoneNb" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo htmlspecialchars($userInfo)->TelephoneNb; ?>">
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