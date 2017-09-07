<?php // ----------------------------------------CONTRÔLEUR ---------------------------------------
// Inclusion du fichier de connexion à la BDD avec un require car c'est un morceau de code indispensable au bon fonctionnement du programme.
require('bdd.inc.php');

// On récupère le titre, le réalisateur, et l'année de sortie. On prend aussi l'id pour plus tard, on sait jamais :o) Ici on fait un query car nulle variable n'est passée en paramètre, pas de risque d'injection SQL.
$getAllArticles = $bdd->query("SELECT * FROM articles ORDER BY DoP");

// Conversion en tableau associatif
$articleList = $getAllArticles->fetchAll(PDO::FETCH_ASSOC);

// on ferme la requête
$getAllArticles->closeCursor();

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
    
    
    // Si $articleList n'est pas vide, on affiche un tableau HTML avec tous les films qu'il contient
    if(!empty($articleList))
    {


        echo '<table class="movietable">';
        echo '<tr><th>Titre</th><th>Auteur</th><th>Date de publication</th><th>Lire</th></tr>';
        
        foreach($articleList as $article){
            echo '<tr><td>'.htmlspecialchars($article['title']).'</td><td>'.htmlspecialchars($article['author']).'</td><td>'.htmlspecialchars($article['DoP']).'</td><td><a href="articledetail.php?id='.htmlspecialchars($article['id']).'">Cliquez ici</a></td></tr>';
        }
        echo '</table>'; // Petit détail important : L'id était ici indispensable car nous en avons besoin pour afficher les détails de chaque film dans une autre page (en le passant dans la superglobale $_GET. Ouf, on a bien fait de le prendre dans la requête !)
        
        
    } else {
        // Si le tableau est vide, on affiche donc un message d'erreur à la place du tableau
        echo '<p style="color:red;">Il n\'y a pas d\'article dans la base de données actuellement.</p>';
    }
    
    ?>



    	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	<script src="scripts/script.js"></script>
    </body>
    </html>