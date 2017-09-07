<?php 


try{
	// Initialisation connexion à la BDD
	$bdd = new PDO('mysql:host=localhost;dbname=projetmag;charset=utf8','root','');

} catch (Exception $e){
	// "die" permet d'arrêter le chargement de la page
	die('Erreur : '.$e->getMessage());

}

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>