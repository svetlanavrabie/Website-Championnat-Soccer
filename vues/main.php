
<html>

<head>
 <meta charset="utf-8"/>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="./css/style2.css" type="text/css" />
<title>Page d'accueil</title>
</head>

<body>
<div id="container">
<div id="contenu">
	<div id="banner">
	     <img src="image/logo_soccer.png" width="100" height="100" id="img1">
		<h2 id="titre">Championat du Soccer</h2>
	</div>

	<div id="menu">
		<ul>
			<!--<li><a href="">accueil</a></li>-->
<?php
	//if (!ISSET($_SESSION)) session_start();
	if (ISSET($_SESSION["connected"]))
	{
?>
			<li><a href="?action=affichertournois">Liste des Tournois</a></li>
			<li><a href="?action=ajoutertournois">Ajouter des Tournois</a></li>
			<li><a href="?action=afficherEquipe">Liste des Equipes</a></li>
			<li><a href="?action=ajouterEquipe">Ajouter des Equipes</a></li>
			<li><a href="?action=afficherterrain">Liste des Terrains</a></li>
			<li><a href="?action=ajouterterrain">Ajouter des Terrains</a></li>
			<li><a href="?action=ajouterMatch">Ajouter des Matchs</a></li>
			<li><a href="?action=afficherMatch">Afficher les Matchs</a></li>
			<li><a href="?action=afficherresultatsMatch">Afficher les Resultats des matchs</a></li>
			<li><a href="?action=classerEquipes">Classement des equipes</a></li>
			<li><a href="?action=deconnecter">Deconnecter <?php echo $_SESSION["connected"]; ?></a></li>
<?php	
	}
	else
	{
?>
			
			
			<li><a href="?action=affichertournoisuser">Liste des Tournois</a></li>
			<li><a href="?action=afficherEquipeuser">Liste des Equipes</a></li>
			<li><a href="?action=afficherterrainuser">Liste des Terrains</a></li>
			<li><a href="?action=afficherMatchuser">Afficher les Matchs</a></li>
			<li><a href="?action=afficherresultatsMatchuser">Afficher les Resultats des matchs</a></li>
			<li><a href="?action=classerEquipesuser">Classement des equipes</a></li>
			
			<li><a href="?action=connecter">Se connecter</a></li>
<?php	
	}
?>			
		</ul>
	</div>
<div>
	<div id="content">
	<?php
	include $vue.".php";
	?>
	
	
	
	</div>
	<div id="slideshow">
	<img name="slide" width="400" height="300">

		<script src="script/script1.js">

		</script>
	</div>
</div>

	<div id="footer">
		<h2>&copy; 2019 Tous droits reserves.</h2>
	</div>
	</div>
</div>
</body>
</html>
