<?php require('../include/session.php');


if($_SESSION['status']== 1 AND isset($_GET['id']) AND preg_match('#^[1-9][0-9]{0,7}$#',$_GET['id']))


{

	$token = uniqid(rand(), true);
//Et on le stocke
$_SESSION['token'] = $token;
//On enregistre aussi le timestamp correspondant au moment de la création du token
$_SESSION['token_time'] = time();

	require('../include/bdd.inc.php');
	$deleteSelectedArticle = $bdd->prepare('DELETE FROM articles WHERE id=:id');
    $deleteSelectedArticle->bindValue(':id', $_GET['id'],PDO::PARAM_INT ); //... Indispensable ici pour convertir la variable passée en INT.
    $deleteSelectedArticle->execute(); // execution de la requete



    echo  '<div class="alert alert-info">Suppression de l\'article n°'.$_GET['id'].' effectuée</div>';

}



?>

<p>Retour à la liste des <a href="listeadmin.php">articles</a></p>