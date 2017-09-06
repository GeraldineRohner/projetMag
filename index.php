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

            <h1 style="text-align: center; padding: 20px; font-size: 70px;">WebZine</h1>

        </div>


        <div class="jumbotron">
            <h2>Article</h2>
            <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
            <p>
                <a class="btn btn-lg btn-primary" href="articledetail.php" role="button">View more</a>
            </p>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="scripts/script.js"></script>
</body>
</html>