<?php 

session_start(); 


if(isset($_SESSION['FirstName'])){

	session_destroy();
	$success='<p style="color:green"> Vous êtes bien déconnecté(e) ! </p>';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Deconnexion - Webzine </title>
	<link rel="stylesheet" href="style/style.css">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    
		<div class="container">

			<?php include('../include/navBo.php'); ?>

			<div class="container-fluid">

				<h1> A bientôt ! </h1>

				<?php 

					if(isset($success)){
						echo $success;
					}

				?>

				<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
				<script src="scripts/script.js"></script>

			 </div>

		</div>

	</body>
</html>