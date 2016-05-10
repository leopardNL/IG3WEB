    <head>
    	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
        <meta charset="utf-8" />
        <title>La vallée des enfants</title>
    </head>

    <body>
	    <ul class="nav nav-tabs">
	  		<li role="presentation"><a href="../controller/accueil.php">Accueil</a></li>  
		
			<form class="navbar-form navbar-right" action="controller/connexion.php" method="post">
					<div class="form-group">
					  <input name="mail" type="mail" placeholder="exemple@gmail.com" class="form-control">
					</div>
					<div class="form-group">
					  <input name="password" type="password" placeholder="Mot de passe" class="form-control">
					</div>
					<button type="submit" class="btn btn-success">Connexion</button>
			</form>
		</ul>