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
    <body>


<?php require('../include/session.php');


if($_SESSION['status']== 1 AND isset($_GET['id']) AND preg_match('#^[1-9][0-9]{0,7}$#',$_GET['id']))


{

	if(isset($_SESSION['token']) && isset($_GET['token']))

	{

    //Si le jeton de la session correspond à celui du formulaire

		if($_SESSION['token'] == $_GET['token'])

		{
			require('../include/bdd.inc.php');
			$deleteSelectedArticle = $bdd->prepare('DELETE FROM articles WHERE id=:id');
    		$deleteSelectedArticle->bindValue(':id', $_GET['id'],PDO::PARAM_INT ); //... Indispensable ici pour convertir la variable passée en INT.
    		$deleteSelectedArticle->execute(); // execution de la requete
    		echo  '<div class="alert alert-info">Suppression de l\'article n°'.$_GET['id'].' effectuée</div>';
    	}
    	else echo "<div class='alert alert-danger'>Vous n'avez pas accès à ce contenu.</div>";
    }
    else echo "<div class='alert alert-danger'>Vous n'avez pas accès à ce contenu.</div>";

}
else echo "<div class='alert alert-danger'>Cet article n'existe pas.</div>";




?>


<p>Retour à la liste des <a href="listeadmin.php">articles</a></p>



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>
</body>
</html>