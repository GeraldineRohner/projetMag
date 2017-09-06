<?php 

$themes = array
(
    '0' => 'Economie',
    '1' => 'Philosophie',
    '2' => 'Histoire',
    '3' => 'People',
    '4' => 'Géographie',
    '5' => 'Politique'
    );

if (isset($_GET['id']) AND preg_match('#^[1-9][0-9]{0,7}$#',$_GET['id'])) // ||||||||||||||| PENSER À  VERIFIER QUE ID > 0 ET INTEGER. |||||||||||||
{

    require('bdd.inc.php'); // Connexion DB
    $getSelectedArticle = $bdd->prepare('SELECT * FROM articles WHERE id=:id'); //Requete préparée (car une variable est passée par $_GET, un utilisateur malicieux pourrait y écrire du SQL et affecter la base de données). On évite ce problème avec une requête préparée suivie d'un bindvalue...
    $getSelectedArticle->bindValue(':id', $_GET['id'],PDO::PARAM_INT ); //... Indispensable ici pour convertir la variable passée en INT.
    $getSelectedArticle->execute(); // execution de la requete


    $articleDetails = $getSelectedArticle->fetchAll(PDO::FETCH_ASSOC); // création du tableau



    if ($getSelectedArticle->rowCount()==0) // Si la requête ne renvoie aucun résultat...
    {
        $kickOut = "Cet article n'existe pas."; // On définit une variable dont l'exisence empechera l'affichage de quoi que ce soit.
    }
    $getSelectedArticle->closeCursor();
      // fermeture de la requête
}

else $kickOut = "Vous n'avez pas accès à ce contenu."; // Si l'utilisateur est arrivé sur cette page sans cliquer sur "plus d'infos", c'est qu'il est ici par erreur. On lui demande donc de partir, et on n'affiche pas de tableau (voir plus bas).


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
    <body>



        <?php 
    if (!isset ($kickOut)) // Si la variable invitant l'utilisateur à partir car arrivé par erreur est vide, c'est que l'utilisateur a bien cliqué sur un lien "plus d'infos" (ou alors a entré à la main l'id d'un film)...


    {


       echo '<table class="movietable">';
       echo '<tr><th>Titre</th><th>Auteur</th><th>Date de publication</th><th>Thème</th></tr>';

         foreach($articleDetails as $article) // Affichage du tableau détaillant tout le film
         {
            echo '<tr><td>'.htmlspecialchars($article['title']).'</td><td>'.htmlspecialchars($article['author']).'</td><td>'.htmlspecialchars($article['DoP']).'</td><td>'.htmlspecialchars($themes[$article['subject']]).'</td></tr>';
        }
        echo '</table>';
        echo '<p>'.$article['content'].'</p>';

    }

else echo '<h1 style="color:red; text-align:center;">'.$kickOut.'</h1>'; // ...Sinon on affiche le message d'erreur

?>


<p>Retour à la liste des <a href="listearticle.php">articles</a>.</p>




<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>
</body>
</html>