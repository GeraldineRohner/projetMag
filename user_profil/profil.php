<?php 

	// Connexion à la BDD (via un try & catch) :
	require("../include/bdd.inc.php");

	
	$getOneProfil=$bdd->prepare("SELECT * FROM users_info WHERE id=:id");
	$getOneProfil->bindValue(":id", htmlspecialchars($_GET['id']), PDO::PARAM_STR);
	$getOneProfil->execute();
		
	$userInfo = $getOneProfil->fetch(PDO::FETCH_ASSOC);

	echo "<pre>";
	print_r ($userInfo);
	echo "</pre>";
	
	$getOneProfil->closeCursor();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Page profil </title>
	<link rel="stylesheet" href="style/style.css">
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- CSS DATATABLE -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">  
      
    </head>
    <body>
    
    <h1>Mon profil </h1>
    
    
	<div id="tableau" class="col-sm-6">

		<table id="myTable" class="table table-striped table-hover table-responsive">

			<tbody>
			
				<tr>
					<td> Nom :  </td>
					<td> <?php echo htmlspecialchars($userInfo)->LastName; ?> </td>
				</tr>
				<tr>
					<td> Prénom :  </td>
					<td> <?php echo htmlspecialchars($userInfo)->FirstName; ?> </td>
				</tr>
				<tr>
					<td> Pseudo :  </td>
					<td> <?php echo htmlspecialchars($userInfo)->UserName; ?> </td>
				</tr>
				<tr>
					<td> Date de naissance : </td>
					<td> <?php echo htmlspecialchars($userInfo)->DoB; ?> </td>
				</tr>
				<tr>
					<td> Adresse email : </td>
					<td> <?php echo htmlspecialchars($userInfo)->Email; ?> </td>
				</tr>
				<tr>
					<td> Numéro de téléphone :  </td>
					<td> <?php echo htmlspecialchars($userInfo)->TelephoneNb; ?> </td>
				</tr>
				<tr>
					<td> Thème de prédilection : </td>
					<td> <?php echo htmlspecialchars($userInfo)->Favs; ?> </td>
				</tr>
								
			</tbody>
			
		</table>
		
		<br>
		
			<a href='editProfil.php?id='.htmlspecialchars($userInfo["id"]).''><button type="submit" class="btn btn-warning"> Modifier mon profil </button></a>
	</div>


    	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	<script src="scripts/script.js"></script>

		<!-- FORMATAGE TABLEAU / SCRIPT DATATABLE -->
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
		<script>
			$(document).ready(function() {
				$('#myTable').dataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/French.json"
					}
				});
			});
		</script>
    </body>
    </html>