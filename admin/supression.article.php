<?php require('../include/session.php');


if($_SESSION['status']== 1 AND isset($_GET['id']) AND preg_match('#^[1-9][0-9]{0,7}$#',$_GET['id']))


{

	if(isset($_SESSION['token']) && isset($_SESSION['token_time']) && isset($_POST['token']))

	{

    //Si le jeton de la session correspond à celui du formulaire

		if($_SESSION['token'] == $_POST['token'])

		{

        //On stocke le timestamp qu'il était il y a 15 minutes

			$timestamp_ancien = time() - (15*60);

        //Si le jeton n'est pas expiré

			if($_SESSION['token_time'] >= $timestamp_ancien)
			{
				require('../include/bdd.inc.php');
				$deleteSelectedArticle = $bdd->prepare('DELETE FROM articles WHERE id=:id');
    			$deleteSelectedArticle->bindValue(':id', $_GET['id'],PDO::PARAM_INT ); //... Indispensable ici pour convertir la variable passée en INT.
    			$deleteSelectedArticle->execute(); // execution de la requete
    			echo  '<div class="alert alert-info">Suppression de l\'article n°'.$_GET['id'].' effectuée</div>';
    		}
    	}

    }

}



?>


<p>Retour à la liste des <a href="listeadmin.php">articles</a></p>