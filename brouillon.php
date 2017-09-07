if ($_SESSION['status'] == 1)
{
	echo "<th>Edit</th>"
}


if $_SESSION['status'] == 1
{
	echo <a href="admin.php?id='.htmlspecialchars($article['id'])
}



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


<?php 

$token = uniqid(rand(), true);
//Et on le stocke
	$_SESSION['token'] = $token;
//On enregistre aussi le timestamp correspondant au moment de la création du token
	$_SESSION['token_time'] = time();
?>


<input type="hidden" name="token" id="token" value="<?php

//Le champ caché a pour valeur le jeton

echo $token;

    ?>"/>




   