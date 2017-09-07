<?php 
// Inclusion du fichier de connexion à la BDD avec un require car c'est un morceau de code indispensable et on doit arrêter la page de charger si il n'est pas trouvé
require('bdd.inc.php');

// On récupère le titre et le content de tous les articles dans la base de données via la méthode query.
$getAllArticles = $bdd->query("SELECT title, content FROM articles ORDER BY DoP");

// On exploite les données encore "brutes" dans $getAllArticles et on les transforme en un tableau associatif dans $articleList
$articleList = $getAllArticles->fetchAll(PDO::FETCH_ASSOC);

// on ferme la requête
$getAllArticles->closeCursor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Home - Webzine </title>
	<link rel="stylesheet" href="style/style.css">
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>


        <div class="container">

          <!-- Static navbar -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="inscription.php">Inscription</a></li>
                        <li><a href="connection.php">Connexion</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">

            <h1 style="text-align: center; padding: 20px; font-size: 100px;">WebZine</h1>

        </div>


        <div class="jumbotron">

            <?php 
            // Si $articleList n'est pas vide, on affiche les articles avec : nom de l'article et contenu de l'article

            

            if(!empty($articleList)){

                foreach ($articleList as $article) {
                    echo '<h1>'.htmlspecialchars($article['title']).'<h1>';

                    echo '<p>'.htmlspecialchars($article['content']).'<p>';
                }


            } else {
        // $articleList est vide, on affiche donc un message d'erreur à la place du tableau
                echo '<p style="color:red;">Il n\'y a pas d\'article dans la base de données!</p>';
            }

            ?>

            <a class="btn btn-lg btn-primary" href="articledetail.php" role="button">View more</a>
        </p>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="scripts/script.js"></script>
</body>
</html>